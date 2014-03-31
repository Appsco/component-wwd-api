<?php

namespace BWC\Component\WWDAPI;

class SetSmtpRelaysResponse
{

  /**
   *
   * @var string $SetSmtpRelaysResult
   * @access public
   */
  public $SetSmtpRelaysResult = null;

  /**
   *
   * @param string $SetSmtpRelaysResult
   * @access public
   */
  public function __construct($SetSmtpRelaysResult)
  {
    $this->SetSmtpRelaysResult = $SetSmtpRelaysResult;
  }

}
