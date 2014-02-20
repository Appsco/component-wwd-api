<?php

namespace BWC\Component\WWDAPI\Response;

class NameGenDBResponse extends AbstractResponse {

  protected $_identifier  = 'NameGenDB';

  public function __construct($raw) {
    parent::__construct($raw);
  }

  public function setResultData($raw) {
    $resultId = implode('', array($this->_identifier, 'Result'));
    $raw = str_replace(' xmlns="DomainsBot.FirstImpact"', '', $raw->$resultId);
    $xml = simplexml_load_string($raw);
    $this->_resultData = $this->_parseRawResponse($xml);
  }

}