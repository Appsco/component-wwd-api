<?php

namespace BWC\Component\WWDAPI;

class SetRIMAccount
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
   * @var string $sCallBack
   * @access public
   */
  public $sCallBack = null;

  /**
   *
   * @var string $sNotification
   * @access public
   */
  public $sNotification = null;

  /**
   *
   * @param string $sCLTRID
   * @param Credential $credential
   * @param string $sShopper
   * @param string $sEmailAddress
   * @param string $sCallBack
   * @param string $sNotification
   * @access public
   */
  public function __construct($sCLTRID, $credential, $sShopper, $sEmailAddress, $sCallBack, $sNotification)
  {
    $this->sCLTRID = $sCLTRID;
    $this->credential = $credential;
    $this->sShopper = $sShopper;
    $this->sEmailAddress = $sEmailAddress;
    $this->sCallBack = $sCallBack;
    $this->sNotification = $sNotification;
  }

}
