<?php

namespace BWC\Component\WWDAPI\Response;

class PollResponse extends AbstractResponse {

  protected $_identifier  = 'Poll';

  public function __construct($raw) {
    parent::__construct($raw);
  }

  public function isValid() {
    if ((int) $this->_code !== 1003 || (int) $this->_code !== 1004) {
      return false;
    }
    return true;
  }

}