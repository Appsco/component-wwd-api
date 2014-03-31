<?php

namespace BWC\Component\WWDAPI;

class GetLegalAgreementContentResponse
{

  /**
   *
   * @var string $GetLegalAgreementContentResult
   * @access public
   */
  public $GetLegalAgreementContentResult = null;

  /**
   *
   * @param string $GetLegalAgreementContentResult
   * @access public
   */
  public function __construct($GetLegalAgreementContentResult)
  {
    $this->GetLegalAgreementContentResult = $GetLegalAgreementContentResult;
  }

}
