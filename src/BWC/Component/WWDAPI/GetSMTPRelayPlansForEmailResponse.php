<?php

namespace BWC\Component\WWDAPI;

class GetSMTPRelayPlansForEmailResponse
{

  /**
   *
   * @var string $GetSMTPRelayPlansForEmailResult
   * @access public
   */
  public $GetSMTPRelayPlansForEmailResult = null;

  /**
   *
   * @param string $GetSMTPRelayPlansForEmailResult
   * @access public
   */
  public function __construct($GetSMTPRelayPlansForEmailResult)
  {
    $this->GetSMTPRelayPlansForEmailResult = $GetSMTPRelayPlansForEmailResult;
  }

}
