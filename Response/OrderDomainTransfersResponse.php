<?php

namespace BWC\Component\WWDAPI\Response;

class OrderDomainTransfersResponse extends AbstractResponse {

  protected $_identifier  = 'OrderDomainTransfers';

  public function __construct($raw) {
    parent::__construct($raw);
  }
}