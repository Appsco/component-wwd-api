<?php

namespace BWC\Component\WWDAPI\Response;

class OrderDomainPrivacyResponse extends AbstractResponse {

  protected $_identifier  = 'OrderDomainPrivacy';

  public function __construct($raw) {
    parent::__construct($raw);
  }
}