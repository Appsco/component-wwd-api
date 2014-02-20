<?php

namespace BWC\Component\WWDAPI\Response;

class OrderDomainsResponse extends AbstractResponse {

  protected $_identifier  = 'OrderDomains';

  public function __construct($raw) {
    parent::__construct($raw);
  }
}