<?php

namespace BWC\Component\WWDAPI;

class SetSmtpRelays
{

  /**
   *
   * @var string $sCLTRID
   * @access public
   */
  public $sCLTRID = null;

  /**
   *
   * @var Credential $credential
   * @access public
   */
  public $credential = null;

  /**
   *
   * @var string $sShopper
   * @access public
   */
  public $sShopper = null;

  /**
   *
   * @var string $sEmailAddress
   * @access public
   */
  public $sEmailAddress = null;

  /**
   *
   * @var int $nSMTPRelays
   * @access public
   */
  public $nSMTPRelays = null;

  /**
   *
   * @param string $sCLTRID
   * @param Credential $credential
   * @param string $sShopper
   * @param string $sEmailAddress
   * @param int $nSMTPRelays
   * @access public
   */
  public function __construct($sCLTRID, $credential, $sShopper, $sEmailAddress, $nSMTPRelays)
  {
    $this->sCLTRID = $sCLTRID;
    $this->credential = $credential;
    $this->sShopper = $sShopper;
    $this->sEmailAddress = $sEmailAddress;
    $this->nSMTPRelays = $nSMTPRelays;
  }

}
