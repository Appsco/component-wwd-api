<?php

namespace BWC\Component\WWDAPI;

class SetDomainLockingResponse
{

  /**
   *
   * @var string $SetDomainLockingResult
   * @access public
   */
  public $SetDomainLockingResult = null;

  /**
   *
   * @param string $SetDomainLockingResult
   * @access public
   */
  public function __construct($SetDomainLockingResult)
  {
    $this->SetDomainLockingResult = $SetDomainLockingResult;
  }

}
