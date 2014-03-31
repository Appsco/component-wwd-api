<?php

namespace BWC\Component\WWDAPI;

class GetLegalAgreementUrlResponse
{

  /**
   *
   * @var string $GetLegalAgreementUrlResult
   * @access public
   */
  public $GetLegalAgreementUrlResult = null;

  /**
   *
   * @param string $GetLegalAgreementUrlResult
   * @access public
   */
  public function __construct($GetLegalAgreementUrlResult)
  {
    $this->GetLegalAgreementUrlResult = $GetLegalAgreementUrlResult;
  }

}
