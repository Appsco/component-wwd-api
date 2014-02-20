<?php

namespace BWC\Component\WWDAPI\Response;

class CheckAvailabilityResponse extends AbstractResponse {

  protected $_identifier  = 'CheckAvailability';

  public function __construct($raw) {
    parent::__construct($raw);
  }

}