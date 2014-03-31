<?php

namespace BWC\Component\WWDAPI;

class GetEmailPlansForDomainResponse
{

  /**
   *
   * @var string $GetEmailPlansForDomainResult
   * @access public
   */
  public $GetEmailPlansForDomainResult = null;

  /**
   *
   * @param string $GetEmailPlansForDomainResult
   * @access public
   */
  public function __construct($GetEmailPlansForDomainResult)
  {
    $this->GetEmailPlansForDomainResult = $GetEmailPlansForDomainResult;
  }

}
