<?php

namespace BWC\Component\WWDAPI;

class CreateNewShopperResponse
{

  /**
   *
   * @var string $CreateNewShopperResult
   * @access public
   */
  public $CreateNewShopperResult = null;

  /**
   *
   * @param string $CreateNewShopperResult
   * @access public
   */
  public function __construct($CreateNewShopperResult)
  {
    $this->CreateNewShopperResult = $CreateNewShopperResult;
  }

}
