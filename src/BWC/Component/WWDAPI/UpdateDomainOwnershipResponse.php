<?php

namespace BWC\Component\WWDAPI;

class UpdateDomainOwnershipResponse
{

  /**
   *
   * @var string $UpdateDomainOwnershipResult
   * @access public
   */
  public $UpdateDomainOwnershipResult = null;

  /**
   *
   * @param string $UpdateDomainOwnershipResult
   * @access public
   */
  public function __construct($UpdateDomainOwnershipResult)
  {
    $this->UpdateDomainOwnershipResult = $UpdateDomainOwnershipResult;
  }

}
