<?php

namespace Drupal\paytm_payment;

/**
 * Paytm Library.
 */
class PaytmLibrary {

  /**
   * Encrypt function.
   */
  public function encrypt_e($input, $ky) {
    $key  = html_entity_decode($ky);
    $iv   = "@@@@&&&&####$$$$";
    $data = openssl_encrypt($input, "AES-128-CBC", $key, 0, $iv);
    return $data;
  }

  /**
   * Decrypt function.
   */
  public function decrypt_e($crypt, $ky) {
    $key  = html_entity_decode($ky);
    $iv   = "@@@@&&&&####$$$$";
    $data = openssl_decrypt($crypt, "AES-128-CBC", $key, 0, $iv);
    return $data;
  }

  /**
   * GenerateSalt function.
   */
  public function generateSalt_e($length) {
    $random = "";
    srand((double) microtime() * 1000000);
    $data = "AbcDE123IJKLMN67QRSTUVWXYZ";
    $data .= "aBCdefghijklmn123opq45rs67tuv89wxyz";
    $data .= "0FGH45OP89";
    for ($i = 0; $i < $length; $i++) {
      $random .= substr($data, (rand() % (strlen($data))), 1);
    }
    return $random;
  }

  /**
   * Checkstring function.
   */
  public function checkString_e($value) {
    $myvalue = ltrim($value);
    $myvalue = rtrim($myvalue);
    if ($myvalue == 'null') {
      $myvalue = '';
    }
    return $myvalue;
  }

  /**
   * Get checksum value from array.
   */
  public function getChecksumFromArray($arrayList, $key, $sort = 1) {
    if ($sort != 0) {
      ksort($arrayList);
    }
    $str = $this->getArray2Str($arrayList);
    $salt = $this->generateSalt_e(4);
    $finalString = $str . "|" . $salt;
    $hash = hash("sha256", $finalString);
    $hashString = $hash . $salt;
    $checksum = $this->encrypt_e($hashString, $key);
    return $checksum;
  }

  /**
   * Get checksum value from string.
   */
  public function getChecksumFromString($str, $key) {

    $salt = $this->generateSalt_e(4);
    $finalString = $str . "|" . $salt;
    $hash = hash("sha256", $finalString);
    $hashString = $hash . $salt;
    $checksum = $this->encrypt_e($hashString, $key);
    return $checksum;
  }

  /**
   * Verifychecksum function.
   */
  public function verifychecksum_e($arrayList, $key, $checksumvalue) {
    $arrayList = $this->removeCheckSumParam($arrayList);
    ksort($arrayList);
    $str = $this->getArray2Str($arrayList);
    $paytm_hash = $this->decrypt_e($checksumvalue, $key);
    $salt = substr($paytm_hash, -4);
    $finalString = $str . "|" . $salt;
    $website_hash = hash("sha256", $finalString);
    $website_hash .= $salt;
    $validFlag = "FALSE";
    if ($website_hash == $paytm_hash) {
      $validFlag = "TRUE";
    }
    else {
      $validFlag = "FALSE";
    }
    return $validFlag;
  }

  /**
   * Verify checksum from given string.
   */
  public function verifychecksum_eFromStr($str, $key, $checksumvalue) {
    $paytm_hash = $this->decrypt_e($checksumvalue, $key);
    $salt = substr($paytm_hash, -4);
    $finalString = $str . "|" . $salt;
    $website_hash = hash("sha256", $finalString);
    $website_hash .= $salt;
    $validFlag = "FALSE";
    if ($website_hash == $paytm_hash) {
      $validFlag = "TRUE";
    }
    else {
      $validFlag = "FALSE";
    }
    return $validFlag;
  }

  /**
   * Convert array to string.
   */
  public function getArray2Str($arrayList) {
    $paramStr = "";
    $flag = 1;
    foreach ($arrayList as $key => $value) {
      if ($flag) {
        $paramStr .= $this->checkString_e($value);
        $flag = 0;
      }
      else {
        $paramStr .= "|" . $this->checkString_e($value);
      }
    }
    return $paramStr;
  }

  /**
   * Redirect function.
   */
  public function redirect2PG($paramList, $key) {
    $hashString = $this->getchecksumFromArray($paramList);
  }

  /**
   * Remove checksum from array lsit.
   */
  public function removeCheckSumParam($arrayList) {
    if (isset($arrayList["CHECKSUMHASH"])) {
      unset($arrayList["CHECKSUMHASH"]);
    }
    return $arrayList;
  }

  /**
   * Get transaction status.
   */
  public function getTxnStatus($requestParamList) {
    return $this->callAPI(PAYTM_STATUS_QUERY_URL, $requestParamList);
  }

  /**
   * Initate transaction refund.
   */
  public function initiateTxnRefund($requestParamList) {
    $checksum = $this->getChecksumFromArray($requestParamList, PAYTM_MERCHANT_KEY, 0);
    $requestParamList["CHECKSUM"] = $checksum;
    return $this->callAPI(PAYTM_REFUND_URL, $requestParamList);
  }

  /**
   * Call API.
   */
  public function callAPI($apiURL, $requestParamList) {
    $jsonResponse = "";
    $responseParamList = [];
    $jsonData = json_encode($requestParamList);
    $postData = 'JsonData=' . urlencode($jsonData);
    $ch = curl_init($apiURL);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
      'Content-Type: application/json',
      'Content-Length: ' . strlen($postData),
    ]
    );
    $jsonResponse = curl_exec($ch);
    $responseParamList = json_decode($jsonResponse, TRUE);
    return $responseParamList;
  }

}
