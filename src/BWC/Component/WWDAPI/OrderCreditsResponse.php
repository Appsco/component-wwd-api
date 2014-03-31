<?php

namespace BWC\Component\WWDAPI;

class OrderCreditsResponse
{

  /**
   *
   * @var string $OrderCreditsResult
   * @access public
   */
  public $OrderCreditsResult = null;

  /**
   *
   * @param string $OrderCreditsResult
   * @access public
   */
  public function __construct($OrderCreditsResult)
  {
    $this->OrderCreditsResult = $OrderCreditsResult;
  }

}
