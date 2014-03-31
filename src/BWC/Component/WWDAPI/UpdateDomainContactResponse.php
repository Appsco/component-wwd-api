<?php

namespace BWC\Component\WWDAPI;

class UpdateDomainContactResponse
{

  /**
   *
   * @var string $UpdateDomainContactResult
   * @access public
   */
  public $UpdateDomainContactResult = null;

  /**
   *
   * @param string $UpdateDomainContactResult
   * @access public
   */
  public function __construct($UpdateDomainContactResult)
  {
    $this->UpdateDomainContactResult = $UpdateDomainContactResult;
  }

}
