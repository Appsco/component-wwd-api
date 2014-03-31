<?php

namespace BWC\Component\WWDAPI;

class GetEmailAddressInfoForShopperResponse
{

  /**
   *
   * @var string $GetEmailAddressInfoForShopperResult
   * @access public
   */
  public $GetEmailAddressInfoForShopperResult = null;

  /**
   *
   * @param string $GetEmailAddressInfoForShopperResult
   * @access public
   */
  public function __construct($GetEmailAddressInfoForShopperResult)
  {
    $this->GetEmailAddressInfoForShopperResult = $GetEmailAddressInfoForShopperResult;
  }

}
