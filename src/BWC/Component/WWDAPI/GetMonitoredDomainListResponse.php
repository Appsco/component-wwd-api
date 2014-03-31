<?php

namespace BWC\Component\WWDAPI;

class GetMonitoredDomainListResponse
{

  /**
   *
   * @var string $GetMonitoredDomainListResult
   * @access public
   */
  public $GetMonitoredDomainListResult = null;

  /**
   *
   * @param string $GetMonitoredDomainListResult
   * @access public
   */
  public function __construct($GetMonitoredDomainListResult)
  {
    $this->GetMonitoredDomainListResult = $GetMonitoredDomainListResult;
  }

}
