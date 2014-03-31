<?php

namespace BWC\Component\WWDAPI;

class OrderDomainsResponse
{

  /**
   *
   * @var string $OrderDomainsResult
   * @access public
   */
  public $OrderDomainsResult = null;

  /**
   *
   * @param string $OrderDomainsResult
   * @access public
   */
  public function __construct($OrderDomainsResult)
  {
    $this->OrderDomainsResult = $OrderDomainsResult;
  }

}
