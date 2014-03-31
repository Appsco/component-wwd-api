<?php

namespace BWC\Component\WWDAPI\Response;

abstract class AbstractResponse implements ResponseInterface {

  static private $responseCodes = array(
    1000 => 'Success',
    1001 => 'Failure',
    1002 => 'Request too big',
    1500 => 'Login denied - account at connection limit',
    1501 => 'Login denied - invalid account IP address',
    1502 => 'Login Denied - account inactive',
    1003 => 'No messages waiting',
    1004 => 'Messages waiting',
    2000 => 'Empty',
    2001 => 'Required field(s) missing',
    2002 => 'Pattern matching error',
    2003 => 'Field too big',
    2004 => 'DB matching error',
  );

  const DEFAULT_STATUS = 1000;

  protected $_code;
  protected $_msg;
  protected $_error;
  protected $_resultData = array();

  protected  $_identifier = array();

  public function isValid() {
    if ((int) $this->_code !== 1000) {
      return false;
    }
    return true;
  }

  protected function _parseRawResponse($raw, $skip = array()) {
    $data = array();

    if (is_object($raw)) {
      $raw = get_object_vars($raw);
    }
    if (is_array($raw)) {
      foreach ($raw as $idx => $value) {
        if (is_object($value) || is_array($value)) {
          $value = $this->_parseRawResponse($value, $skip);
        }
        if (in_array($idx, $skip)) {
          continue;
        }
        $data[$idx] = $value;
      }
    }
    return $data;
  }

  public function __construct($raw) {
    $this->setResultData($raw);
    $this->setCode();
    $this->setMessage();
    $this->setError();
  }

  public function __set($name, $value) {
    $this->$name = $value;
  }

  public function __toString() {
    return json_encode($this->getResultData());
  }

  public function getStatus() {
    return self::$responseCodes[$this->_code];
  }

  public function getMessage() {
    return $this->_msg;
  }

  public function getError() {
    return $this->_error;
  }

  public function getResultData() {
    return $this->_resultData;
  }

  public function setCode() {
    $this->_code = isset($this->_resultData['result']['@attributes']['code'])
      ? $this->_resultData['result']['@attributes']['code']
      : self::DEFAULT_STATUS;
  }

  public function setMessage() {
    $this->_msg = !empty($this->_resultData['result']['msg'])
      ? $this->_resultData['result']['msg']
      : '';
  }

  public function setError() {
    $this->_error = !empty($this->_resultData['resdata']['error']['@attributes']['msg'])
      ? $this->_resultData['resdata']['error']['@attributes']['msg']
      : '';
  }

  public function setResultData($raw) {
    $resultId = implode("", array($this->_identifier, 'Result'));
    $xml = simplexml_load_string($raw->$resultId);
    $this->_resultData = $this->_parseRawResponse($xml);
  }

}