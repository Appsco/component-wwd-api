<?php

namespace BWC\Component\WWDAPI;

class OrderResourceRenewalsResponse
{

  /**
   *
   * @var string $OrderResourceRenewalsResult
   * @access public
   */
  public $OrderResourceRenewalsResult = null;

  /**
   *
   * @param string $OrderResourceRenewalsResult
   * @access public
   */
  public function __construct($OrderResourceRenewalsResult)
  {
    $this->OrderResourceRenewalsResult = $OrderResourceRenewalsResult;
  }

}
