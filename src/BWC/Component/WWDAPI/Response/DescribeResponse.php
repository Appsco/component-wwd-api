<?php

namespace BWC\Component\WWDAPI\Response;

class DescribeResponse extends AbstractResponse {

  protected $_identifier  = 'Describe';

  public function __construct($raw) {
    parent::__construct($raw);
  }

  function isValid() {
    if ((int) $this->_code !== 1000) {
      return false;
    }
    return true;
  }

}