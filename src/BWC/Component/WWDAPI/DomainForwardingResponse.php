<?php

namespace BWC\Component\WWDAPI;

class DomainForwardingResponse
{

  /**
   *
   * @var string $DomainForwardingResult
   * @access public
   */
  public $DomainForwardingResult = null;

  /**
   *
   * @param string $DomainForwardingResult
   * @access public
   */
  public function __construct($DomainForwardingResult)
  {
    $this->DomainForwardingResult = $DomainForwardingResult;
  }

}
