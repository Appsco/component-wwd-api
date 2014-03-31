<?php

namespace BWC\Component\WWDAPI;

class OrderDomainTransfersResponse
{

  /**
   *
   * @var string $OrderDomainTransfersResult
   * @access public
   */
  public $OrderDomainTransfersResult = null;

  /**
   *
   * @param string $OrderDomainTransfersResult
   * @access public
   */
  public function __construct($OrderDomainTransfersResult)
  {
    $this->OrderDomainTransfersResult = $OrderDomainTransfersResult;
  }

}
