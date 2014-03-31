<?php

namespace BWC\Component\WWDAPI;

class GetEmailPlanInfoForShopperResponse
{

  /**
   *
   * @var string $GetEmailPlanInfoForShopperResult
   * @access public
   */
  public $GetEmailPlanInfoForShopperResult = null;

  /**
   *
   * @param string $GetEmailPlanInfoForShopperResult
   * @access public
   */
  public function __construct($GetEmailPlanInfoForShopperResult)
  {
    $this->GetEmailPlanInfoForShopperResult = $GetEmailPlanInfoForShopperResult;
  }

}
