<?php

namespace BWC\Component\WWDAPI;

class GetSMTPRelaysForEmailResponse
{

  /**
   *
   * @var string $GetSMTPRelaysForEmailResult
   * @access public
   */
  public $GetSMTPRelaysForEmailResult = null;

  /**
   *
   * @param string $GetSMTPRelaysForEmailResult
   * @access public
   */
  public function __construct($GetSMTPRelaysForEmailResult)
  {
    $this->GetSMTPRelaysForEmailResult = $GetSMTPRelaysForEmailResult;
  }

}
