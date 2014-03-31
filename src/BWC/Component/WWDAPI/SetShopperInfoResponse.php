<?php

namespace BWC\Component\WWDAPI;

class SetShopperInfoResponse
{

  /**
   *
   * @var string $SetShopperInfoResult
   * @access public
   */
  public $SetShopperInfoResult = null;

  /**
   *
   * @param string $SetShopperInfoResult
   * @access public
   */
  public function __construct($SetShopperInfoResult)
  {
    $this->SetShopperInfoResult = $SetShopperInfoResult;
  }

}
