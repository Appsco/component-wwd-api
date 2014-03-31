<?php

namespace BWC\Component\WWDAPI;

class TestEmailPassword
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
   * @var string $sPassword
   * @access public
   */
  public $sPassword = null;

  /**
   *
   * @var boolean $bEncrypted
   * @access public
   */
  public $bEncrypted = null;

  /**
   *
   * @param string $sCLTRID
   * @param Credential $credential
   * @param string $sShopper
   * @param string $sEmailAddress
   * @param string $sPassword
   * @param boolean $bEncrypted
   * @access public
   */
  public function __construct($sCLTRID, $credential, $sShopper, $sEmailAddress, $sPassword, $bEncrypted)
  {
    $this->sCLTRID = $sCLTRID;
    $this->credential = $credential;
    $this->sShopper = $sShopper;
    $this->sEmailAddress = $sEmailAddress;
    $this->sPassword = $sPassword;
    $this->bEncrypted = $bEncrypted;
  }

}
