<?php

namespace Drupal\paytm_payment\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\paytm_payment\PaytmLibrary;

/**
 * Paytm payment status form..
 */
class PaytmPaymentStatus extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'paytm_payment_status';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $encdec_paytm = new PaytmLibrary();
    $paytmChecksum = "";
    $paramList = [];
    $isValidChecksum = "FALSE";

    $paramList = $_POST;
    // Sent by Paytm pg.
    $paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : "";
    // Verify all parameters received from Paytm pg to your application.
    // Like MID received from paytm pg is same as your application�s
    // MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to
    // Paytm PG for initiating transaction etc.
    // will return TRUE or FALSE string.
    $isValidChecksum = $encdec_paytm->verifychecksum_e($paramList, $_SESSION['merchant_key'], $paytmChecksum);
    if ($isValidChecksum == "TRUE") {
      if ($_POST["STATUS"] == "TXN_SUCCESS") {
        drupal_set_message(t('Transaction status is success.'), 'success');
        // Process your transaction here as success transaction.
        // Verify amount & order id received from Payment gateway with your
        // application's order id and amount.
      }
      else {
        drupal_set_message(t('Transaction status is failure.'), 'error');
      }

      if (isset($_POST) && count($_POST) > 0) {
        $form['success'] = [
          '#markup' => "<br/><b>Checksum matched and following are the transaction details:</b>" . "<br/><br/>",
        ];
        foreach ($_POST as $paramName => $paramValue) {
          if ($paramName == 'TXNAMOUNT' || $paramName == 'TXNDATE' || $paramName == 'STATUS' || $paramName == 'BANKNAME') {
            $form[$paramName] = [
              '#markup' => '<div class="payment-content"><span><b>' . $paramName . '</b></span>&nbsp;<span> : ' . $paramValue . '</span></div>',
            ];
          }
          $form['transaction_details'][$paramName] = [
            '#type' => 'hidden',
            '#title' => $paramName,
            '#default_value' => $paramValue,
            '#required' => TRUE,
          ];
        }
      }
    }
    else {
      drupal_set_message(t('Checksum mismatched.'), 'error');
    }
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
  }

}
