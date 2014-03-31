<?php

namespace BWC\Component\WWDAPI;

class GetSMTPRelayPlansForDomainResponse
{

  /**
   *
   * @var string $GetSMTPRelayPlansForDomainResult
   * @access public
   */
  public $GetSMTPRelayPlansForDomainResult = null;

  /**
   *
   * @param string $GetSMTPRelayPlansForDomainResult
   * @access public
   */
  public function __construct($GetSMTPRelayPlansForDomainResult)
  {
    $this->GetSMTPRelayPlansForDomainResult = $GetSMTPRelayPlansForDomainResult;
  }

}
