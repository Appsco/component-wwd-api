<?php

namespace BWC\Component\WWDAPI;

class RemoveSmtpRelayResponse
{

  /**
   *
   * @var string $RemoveSmtpRelayResult
   * @access public
   */
  public $RemoveSmtpRelayResult = null;

  /**
   *
   * @param string $RemoveSmtpRelayResult
   * @access public
   */
  public function __construct($RemoveSmtpRelayResult)
  {
    $this->RemoveSmtpRelayResult = $RemoveSmtpRelayResult;
  }

}
