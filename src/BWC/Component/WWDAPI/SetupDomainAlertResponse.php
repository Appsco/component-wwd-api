<?php

namespace BWC\Component\WWDAPI;

class SetupDomainAlertResponse
{

  /**
   *
   * @var string $SetupDomainAlertResult
   * @access public
   */
  public $SetupDomainAlertResult = null;

  /**
   *
   * @param string $SetupDomainAlertResult
   * @access public
   */
  public function __construct($SetupDomainAlertResult)
  {
    $this->SetupDomainAlertResult = $SetupDomainAlertResult;
  }

}
