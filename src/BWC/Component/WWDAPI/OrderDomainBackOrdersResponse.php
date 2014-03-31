<?php

namespace BWC\Component\WWDAPI;

class OrderDomainBackOrdersResponse
{

  /**
   *
   * @var string $OrderDomainBackOrdersResult
   * @access public
   */
  public $OrderDomainBackOrdersResult = null;

  /**
   *
   * @param string $OrderDomainBackOrdersResult
   * @access public
   */
  public function __construct($OrderDomainBackOrdersResult)
  {
    $this->OrderDomainBackOrdersResult = $OrderDomainBackOrdersResult;
  }

}
