<?php

namespace BWC\Component\WWDAPI;

class OrderDomainRenewalsResponse
{

  /**
   *
   * @var string $OrderDomainRenewalsResult
   * @access public
   */
  public $OrderDomainRenewalsResult = null;

  /**
   *
   * @param string $OrderDomainRenewalsResult
   * @access public
   */
  public function __construct($OrderDomainRenewalsResult)
  {
    $this->OrderDomainRenewalsResult = $OrderDomainRenewalsResult;
  }

}
