<?php

namespace BWC\Component\WWDAPI;

class GetDomainAlertCreditsResponse
{

  /**
   *
   * @var string $GetDomainAlertCreditsResult
   * @access public
   */
  public $GetDomainAlertCreditsResult = null;

  /**
   *
   * @param string $GetDomainAlertCreditsResult
   * @access public
   */
  public function __construct($GetDomainAlertCreditsResult)
  {
    $this->GetDomainAlertCreditsResult = $GetDomainAlertCreditsResult;
  }

}
