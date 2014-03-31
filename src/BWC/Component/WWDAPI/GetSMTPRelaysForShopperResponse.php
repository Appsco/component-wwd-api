<?php

namespace BWC\Component\WWDAPI;

class GetSMTPRelaysForShopperResponse
{

  /**
   *
   * @var string $GetSMTPRelaysForShopperResult
   * @access public
   */
  public $GetSMTPRelaysForShopperResult = null;

  /**
   *
   * @param string $GetSMTPRelaysForShopperResult
   * @access public
   */
  public function __construct($GetSMTPRelaysForShopperResult)
  {
    $this->GetSMTPRelaysForShopperResult = $GetSMTPRelaysForShopperResult;
  }

}
