<?php

namespace BWC\Component\WWDAPI;

class GetAvailableBalanceResponse
{

  /**
   *
   * @var string $GetAvailableBalanceResult
   * @access public
   */
  public $GetAvailableBalanceResult = null;

  /**
   *
   * @param string $GetAvailableBalanceResult
   * @access public
   */
  public function __construct($GetAvailableBalanceResult)
  {
    $this->GetAvailableBalanceResult = $GetAvailableBalanceResult;
  }

}
