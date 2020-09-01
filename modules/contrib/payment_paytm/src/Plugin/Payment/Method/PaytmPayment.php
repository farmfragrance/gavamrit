<?php

namespace Drupal\paytm_payment\Plugin\Payment\Method;

use Drupal\Component\Utility\Unicode;
use Drupal\Component\Serialization\Json;
use Drupal\payment_offsite_api\Plugin\Payment\Method\PaymentMethodBaseOffsite;
use Drupal\payment_offsite_api\Plugin\Payment\Method\PaymentMethodOffsiteInterface;
use Drupal\Core\Url;
use Drupal\paytm_payment\PaytmLibrary;

/**
 * A Paytm payment method.
 *
 * @PaymentMethod(
 *   id = "paytm_payment",
 *   deriver = "\Drupal\payment_offsite_api\Plugin\Payment\Method\PaymentMethodBaseOffsiteDeriver",
 *   operations_provider = "\Drupal\payment_offsite_api\Plugin\Payment\Method\PaymentMethodBaseOffsiteOperationsProvider",
 * )
 */
class PaytmPayment extends PaymentMethodBaseOffsite implements PaymentMethodOffsiteInterface {

  const PAYTM_API_TEST_URL = 'https://securegw-stage.paytm.in/theia/processTransaction';
  const PAYTM_API_URL = 'https://secure.paytm.in/oltp-web/processTransaction';

  /**
   * {@inheritdoc}
   */
  protected function getSupportedCurrencies() {
    return TRUE;
  }

  /**
   * Returns the Mode.
   *
   * @return int
   *   Mode.
   */
  public function getMode() {
    return $this->pluginDefinition['config']['mode'];
  }

  /**
   * Returns the Merchant Id.
   *
   * @return int
   *   Merchant Id.
   */
  public function getMerchantId() {
    return $this->pluginDefinition['config']['merchant_id'];
  }

  /**
   * Returns the Merchant Key.
   *
   * @return int
   *   Merchant Key.
   */
  public function getMerchantKey() {
    return $this->pluginDefinition['config']['merchant_key'];
  }

  /**
   * Returns Merchant Website.
   *
   * @return int
   *   Merchant Website.
   */
  public function getMerchantWebsite() {
    return $this->pluginDefinition['config']['merchant_website'];
  }

  /**
   * Returns Transaction Amount.
   *
   * @return int
   *   Transaction Amount.
   */
  public function getAmount() {
    return $this->pluginDefinition['config']['amount'];
  }

  /**
   * {@inheritdoc}
   */
  public function paymentForm() {
    $encdec_paytm = new PaytmLibrary();
    $form = [];
    $payment = $this->getPayment();
    // Get the $base_url.
    global $base_url;
    $user_id = \Drupal::currentUser()->id();
    $merchant_mode = $this->getMode();
    $merchant_id = $this->getMerchantId();
    $merchant_key = $this->getMerchantKey();
    $merchant_website = $this->getMerchantWebsite();
    $txn_amount = $this->getAmount();
    $order_id = 'ORD' . $payment->id();
    $checkSum = "";

    if ($merchant_mode == 'test') {
      $form['#action'] = self::PAYTM_API_TEST_URL;
    }
    else {
      $form['#action'] = self::PAYTM_API_URL;
    }

    $paramList = [];
    $paramList["MID"] = $merchant_id;
    $paramList["ORDER_ID"] = $order_id;
    $paramList["CUST_ID"] = $user_id;
    $paramList["INDUSTRY_TYPE_ID"] = 'Retail';
    $paramList["CHANNEL_ID"] = 'WEB';
    $paramList["TXN_AMOUNT"] = $txn_amount;
    $paramList["WEBSITE"] = $merchant_website;
    $callback_url = $base_url . '' . Url::fromUri('internal:' . '/paytm/status')->toString();
    $paramList["CALLBACK_URL"] = $callback_url;
    $_SESSION['merchant_key'] = $merchant_key;
    // Set CHECKSUMHASH.
    $checkSum = $encdec_paytm->getChecksumFromArray($paramList, $_SESSION['merchant_key']);

    foreach ($paramList as $name => $value) {
      $form[$name] = [
        '#type' => 'hidden',
        '#title' => $name,
        '#default_value' => $value,
        '#required' => TRUE,
      ];
    }
    $form['CHECKSUMHASH'] = [
      '#type' => 'hidden',
      '#title' => t('Merchant Id'),
      '#default_value' => $checkSum,
      '#required' => TRUE,
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function ipnExecute() {
    $this->logger->error('start_exec');
    $ipn_result = [
      'status' => 'fail',
      'message' => '',
      'response_code' => 200,
    ];

    if (!$this->ipnValidate()) {
      return $ipn_result;
    }
    $response_data_base_64 = $this->request->request->get('data');
    $response_data_json = base64_decode($response_data_base_64);
    $response_data = Json::decode($response_data_json);
    $status = $response_data['status'];
    $payment_status = $this->getStatusId($status);
    $status = isset($payment_status) ? $payment_status : 'payment_pending';
    $this->getPayment()
      ->setPaymentStatus($this->paymentStatusManager->createInstance($status));
    $this->getPayment()->save();

    if (!$this->isFallbackMode()) {
      return [
        'status' => 'success',
        'message' => '',
        'response_code' => 200,
      ];
    }

    return $ipn_result;

  }

  /**
   * {@inheritdoc}
   */
  public function getResultPages() {
    return [
      'pending' => FALSE,
    ];
  }

  /**
   * Returns pending message.
   *
   * @return array
   *   The renderable array.
   */
  public function getPendingContent() {
    $response_data_base_64 = $this->request->request->get('data');
    $status = 'pending';
    if ($response_data_base_64) {
      $response_data_json = base64_decode($response_data_base_64);
      $response_data = Json::decode($response_data_json);
      $status = $response_data['status'];
    }
    return [
      '#markup' => $this->t('Payment as @external_status.', ['@external_status' => $status]),
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function isConfigured() {
    return !empty($this->getActionUrl());
  }

  /**
   * {@inheritdoc}
   */
  public function ipnValidate() {
    if (!$this->validateEmpty()) {
      return FALSE;
    }
    $response_data_base_64 = $this->request->request->get('data');
    $response_signature = $this->request->request->get('signature');
    $private_key = $this->getPrivateKey();
    $signature = base64_encode(sha1($private_key . $response_data_base_64 . $private_key, 1));
    if (Unicode::strtoupper($response_signature) != Unicode::strtoupper($signature)) {
      if ($this->isVerbose()) {
        $this->logger->error('Missing Signature. POST data: <pre>@data</pre>',
          ['@data' => print_r($this->request->request, TRUE)]
        );
      }
      return FALSE;
    }
    $response_data_json = base64_decode($response_data_base_64);
    $response_data = Json::decode($response_data_json);
    if (!($this->validateTransactionId($response_data['order_id']) && $this->validateAmount($response_data['amount']) && $this->validateCurrency($response_data['currency']))) {
      return FALSE;
    };
    return TRUE;
  }

  /**
   * Currency default validator.
   *
   * @return bool
   *   TRUE on successful validation FALSE otherwise.
   */
  protected function validateCurrency($request_currency) {
    if ($this->getPayment()->getCurrency()->currencyCode != $request_currency) {
      if ($this->isVerbose()) {
        $this->logger->error('Missing transaction id currency. POST data: <pre>@data</pre>',
          ['@data' => print_r(\Drupal::request()->request, TRUE)]
        );
      }
      return FALSE;
    }
    return TRUE;
  }

  /**
   * Transaction ID default validator.
   *
   * @return bool
   *   TRUE on successful validation FALSE otherwise.
   */
  protected function validateTransactionId($request_payment_id) {
    $payment = \Drupal::entityTypeManager()
      ->getStorage('payment')
      ->load($request_payment_id);
    if (!$payment) {
      if ($this->isVerbose()) {
        $this->logger->error('Missing transaction id. POST data: <pre>@data</pre>',
          ['@data' => print_r($this->request->request, TRUE)]
        );
      }
      return FALSE;
    }
    $this->setPayment($payment);
    return TRUE;
  }

  /**
   * Amount default validator.
   *
   * @return bool
   *   TRUE on successful validation FALSE otherwise.
   */
  protected function validateAmount($request_amount) {
    if ($this->getPayment()->getAmount() != $request_amount) {
      if ($this->isVerbose()) {
        $this->logger->error('Missing transaction id amount. POST data: <pre>@data</pre>',
          ['@data' => print_r(\Drupal::request()->request, TRUE)]
        );
      }
      return FALSE;
    }
    return TRUE;
  }

  /**
   * Empty default validator.
   *
   * @return bool
   *   TRUE on successful validation FALSE otherwise.
   */
  protected function validateEmpty() {
    // Exit now if the $_POST was empty.
    if (empty($this->request->request)) {
      if ($this->isVerbose()) {
        $this->logger->error('Interaction URL accessed with no POST data submitted.',
          []
        );
      }
      return FALSE;
    }
    return TRUE;
  }

}
