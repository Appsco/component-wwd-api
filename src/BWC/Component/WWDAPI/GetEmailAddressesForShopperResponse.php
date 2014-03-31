<?php

namespace BWC\Component\WWDAPI;

class GetEmailAddressesForShopperResponse
{

  /**
   *
   * @var string $GetEmailAddressesForShopperResult
   * @access public
   */
  public $GetEmailAddressesForShopperResult = null;

  /**
   *
   * @param string $GetEmailAddressesForShopperResult
   * @access public
   */
  public function __construct($GetEmailAddressesForShopperResult)
  {
    $this->GetEmailAddressesForShopperResult = $GetEmailAddressesForShopperResult;
  }

}
