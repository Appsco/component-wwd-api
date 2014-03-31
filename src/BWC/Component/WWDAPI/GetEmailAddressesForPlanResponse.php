<?php

namespace BWC\Component\WWDAPI;

class GetEmailAddressesForPlanResponse
{

  /**
   *
   * @var string $GetEmailAddressesForPlanResult
   * @access public
   */
  public $GetEmailAddressesForPlanResult = null;

  /**
   *
   * @param string $GetEmailAddressesForPlanResult
   * @access public
   */
  public function __construct($GetEmailAddressesForPlanResult)
  {
    $this->GetEmailAddressesForPlanResult = $GetEmailAddressesForPlanResult;
  }

}
