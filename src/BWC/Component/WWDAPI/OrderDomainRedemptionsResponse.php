<?php

namespace BWC\Component\WWDAPI;

class OrderDomainRedemptionsResponse
{

  /**
   *
   * @var string $OrderDomainRedemptionsResult
   * @access public
   */
  public $OrderDomainRedemptionsResult = null;

  /**
   *
   * @param string $OrderDomainRedemptionsResult
   * @access public
   */
  public function __construct($OrderDomainRedemptionsResult)
  {
    $this->OrderDomainRedemptionsResult = $OrderDomainRedemptionsResult;
  }

}
