<?php

namespace BWC\Component\WWDAPI;

class GetSMTPRelayInfoForShopperResponse
{

  /**
   *
   * @var string $GetSMTPRelayInfoForShopperResult
   * @access public
   */
  public $GetSMTPRelayInfoForShopperResult = null;

  /**
   *
   * @param string $GetSMTPRelayInfoForShopperResult
   * @access public
   */
  public function __construct($GetSMTPRelayInfoForShopperResult)
  {
    $this->GetSMTPRelayInfoForShopperResult = $GetSMTPRelayInfoForShopperResult;
  }

}
