<?php

namespace BWC\Component\WWDAPI;

class UpdateDomainAlertResponse
{

  /**
   *
   * @var string $UpdateDomainAlertResult
   * @access public
   */
  public $UpdateDomainAlertResult = null;

  /**
   *
   * @param string $UpdateDomainAlertResult
   * @access public
   */
  public function __construct($UpdateDomainAlertResult)
  {
    $this->UpdateDomainAlertResult = $UpdateDomainAlertResult;
  }

}
