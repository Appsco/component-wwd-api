<?php

namespace BWC\Component\WWDAPI;

class OrderServiceRenewalsResponse
{

  /**
   *
   * @var string $OrderServiceRenewalsResult
   * @access public
   */
  public $OrderServiceRenewalsResult = null;

  /**
   *
   * @param string $OrderServiceRenewalsResult
   * @access public
   */
  public function __construct($OrderServiceRenewalsResult)
  {
    $this->OrderServiceRenewalsResult = $OrderServiceRenewalsResult;
  }

}
