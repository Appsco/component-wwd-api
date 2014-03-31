<?php

namespace BWC\Component\WWDAPI;

class GetEmailPlansForShopperResponse
{

  /**
   *
   * @var string $GetEmailPlansForShopperResult
   * @access public
   */
  public $GetEmailPlansForShopperResult = null;

  /**
   *
   * @param string $GetEmailPlansForShopperResult
   * @access public
   */
  public function __construct($GetEmailPlansForShopperResult)
  {
    $this->GetEmailPlansForShopperResult = $GetEmailPlansForShopperResult;
  }

}
