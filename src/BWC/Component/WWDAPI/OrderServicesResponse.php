<?php

namespace BWC\Component\WWDAPI;

class OrderServicesResponse
{

  /**
   *
   * @var string $OrderServicesResult
   * @access public
   */
  public $OrderServicesResult = null;

  /**
   *
   * @param string $OrderServicesResult
   * @access public
   */
  public function __construct($OrderServicesResult)
  {
    $this->OrderServicesResult = $OrderServicesResult;
  }

}
