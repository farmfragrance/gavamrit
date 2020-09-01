<?php

namespace Drupal\paytm_payment\Plugin\Payment\MethodConfiguration;

use Drupal\Component\Utility\NestedArray;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\payment_offsite_api\Plugin\Payment\MethodConfiguration\PaymentMethodConfigurationBaseOffsite;

/**
 * Provides the configuration for the paytm_payment payment method plugin.
 *
 * Plugins extending this class should provide a configuration schema that
 * extends
 * plugin.plugin_configuration.payment_method_configuration.paytm_payment.
 *
 * @PaymentMethodConfiguration(
 *   description = @Translation("A payment method type that process payments via Paytm payment gateway."),
 *   id = "paytm_payment",
 *   label = @Translation("Paytm")
 * )
 */
class PaytmPayment extends PaymentMethodConfigurationBaseOffsite implements ContainerFactoryPluginInterface {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return parent::defaultConfiguration() + [
      'ipn_statuses' => [
        'success' => 'payment_success',
        'failure' => 'payment_failed',
        'reversed' => 'payment_failed',
      ],
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function processBuildConfigurationForm(array &$element, FormStateInterface $form_state, array &$form) {
    $element['mode'] = [
      '#type' => 'radios',
      '#title' => t('Mode'),
      '#default_value' => 'test',
      '#required' => TRUE,
      '#options' => [
        'test' => 'TEST',
        'live' => 'LIVE',
      ],
    ];

    $element['merchant_id'] = [
      '#type' => 'textfield',
      '#title' => t('Merchant Id'),
      '#default_value' => $this->getMerchantId(),
      '#required' => TRUE,
    ];

    $element['merchant_key'] = [
      '#type' => 'textfield',
      '#title' => t('Merchant Key'),
      '#default_value' => $this->getMerchantKey(),
      '#required' => TRUE,
    ];

    $element['merchant_website'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Merchant Website'),
      '#default_value' => $this->getMerchantWebsite(),
      '#required' => TRUE,
    ];

    $element['merchant_id'] = [
      '#type' => 'textfield',
      '#title' => t('Merchant Id'),
      '#default_value' => $this->getMerchantId(),
      '#required' => TRUE,
    ];

    $element['amount'] = [
      '#type' => 'textfield',
      '#title' => t('Enter Amount'),
      '#default_value' => $this->getAmount(),
      '#required' => TRUE,
    ];

    return parent::processBuildConfigurationForm($element, $form_state, $form);
  }

  /**
   * {@inheritdoc}
   */
  public function submitConfigurationForm(array &$form, FormStateInterface $form_state) {
    parent::submitConfigurationForm($form, $form_state);

    $parents = $form['plugin_form']['#parents'];
    $values = $form_state->getValues();
    $values = NestedArray::getValue($values, $parents);

    $this->setMode($values['mode']);
    $this->setMerchantId($values['merchant_id']);
    $this->setMerchantKey($values['merchant_key']);
    $this->setMerchantWebsite($values['merchant_website']);
    $this->setAmount($values['amount']);
  }

  /**
   * Returns the Mode.
   *
   * @return int
   *   Mode.
   */
  public function getMode() {
    return $this->configuration['config']['mode'];
  }

  /**
   * Sets the Mode.
   *
   * @param string $mode
   *   The Mode.
   *
   * @return static
   */
  public function setMode($mode) {
    $this->configuration['config']['mode'] = $mode;

    return $this;
  }

  /**
   * Returns the Merchant Id.
   *
   * @return int
   *   Merchant Id.
   */
  public function getMerchantId() {
    return isset($this->configuration['config']['merchant_id']) ? $this->configuration['config']['merchant_id'] : NULL;
  }

  /**
   * Sets the Merchant Id.
   *
   * @param string $merchant_id
   *   The Merchant Id.
   *
   * @return static
   */
  public function setMerchantId($merchant_id) {
    $this->configuration['config']['merchant_id'] = $merchant_id;

    return $this;
  }

  /**
   * Returns Merchant Key.
   *
   * @return int
   *   Merchant Key.
   */
  public function getMerchantKey() {
    return isset($this->configuration['config']['merchant_key']) ? $this->configuration['config']['merchant_key'] : NULL;
  }

  /**
   * Sets Merchant Key.
   *
   * @param string $merchant_key
   *   Merchant Key.
   *
   * @return static
   */
  public function setMerchantKey($merchant_key) {
    $this->configuration['config']['merchant_key'] = $merchant_key;

    return $this;
  }

  /**
   * Returns Merchant Website.
   *
   * @return int
   *   Merchant Website.
   */
  public function getMerchantWebsite() {
    return isset($this->configuration['config']['merchant_website']) ? $this->configuration['config']['merchant_website'] : NULL;
  }

  /**
   * Sets Merchant Website.
   *
   * @param string $merchant_website
   *   Merchant Website.
   *
   * @return static
   */
  public function setMerchantWebsite($merchant_website) {
    $this->configuration['config']['merchant_website'] = $merchant_website;

    return $this;
  }

  /**
   * Returns Transaction Amount.
   *
   * @return int
   *   Transaction Amount.
   */
  public function getAmount() {
    return isset($this->configuration['config']['amount']) ? $this->configuration['config']['amount'] : NULL;
  }

  /**
   * Sets Transaction Amount.
   *
   * @param string $txn_amount
   *   Transaction Amount.
   *
   * @return static
   */
  public function setAmount($txn_amount) {
    $this->configuration['config']['amount'] = $txn_amount;

    return $this;
  }

  /**
   * Returns the auto submit flag.
   *
   * @return bool
   *   auto submit flag.
   */
  public function getAutoSubmit() {
    return isset($this->configuration['auto_submit']) ? $this->configuration['auto_submit'] : NULL;
  }

  /**
   * Returns the verbose flag.
   *
   * @return bool
   *   Verbose flag.
   */
  public function getVerbose() {
    return isset($this->configuration['verbose']) ? $this->configuration['verbose'] : NULL;
  }

}
