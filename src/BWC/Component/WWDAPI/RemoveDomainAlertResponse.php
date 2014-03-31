<?php

namespace BWC\Component\WWDAPI;

class RemoveDomainAlertResponse
{

  /**
   *
   * @var string $RemoveDomainAlertResult
   * @access public
   */
  public $RemoveDomainAlertResult = null;

  /**
   *
   * @param string $RemoveDomainAlertResult
   * @access public
   */
  public function __construct($RemoveDomainAlertResult)
  {
    $this->RemoveDomainAlertResult = $RemoveDomainAlertResult;
  }

}
