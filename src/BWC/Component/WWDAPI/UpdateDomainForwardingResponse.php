<?php

namespace BWC\Component\WWDAPI;

class UpdateDomainForwardingResponse
{

  /**
   *
   * @var string $UpdateDomainForwardingResult
   * @access public
   */
  public $UpdateDomainForwardingResult = null;

  /**
   *
   * @param string $UpdateDomainForwardingResult
   * @access public
   */
  public function __construct($UpdateDomainForwardingResult)
  {
    $this->UpdateDomainForwardingResult = $UpdateDomainForwardingResult;
  }

}
