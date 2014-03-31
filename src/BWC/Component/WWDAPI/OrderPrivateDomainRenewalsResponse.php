<?php

namespace BWC\Component\WWDAPI;

class OrderPrivateDomainRenewalsResponse
{

  /**
   *
   * @var string $OrderPrivateDomainRenewalsResult
   * @access public
   */
  public $OrderPrivateDomainRenewalsResult = null;

  /**
   *
   * @param string $OrderPrivateDomainRenewalsResult
   * @access public
   */
  public function __construct($OrderPrivateDomainRenewalsResult)
  {
    $this->OrderPrivateDomainRenewalsResult = $OrderPrivateDomainRenewalsResult;
  }

}
