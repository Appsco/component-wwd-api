<?php

namespace BWC\Component\WWDAPI\Response;

class InfoResponse extends AbstractResponse {

  protected $_identifier  = 'Info';

  public function __construct($raw) {
    parent::__construct($raw);
  }

}