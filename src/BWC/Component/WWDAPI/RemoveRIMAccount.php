<?php

namespace BWC\Component\WWDAPI;

class RemoveRIMAccount
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
   * @var string $sSubscription
   * @access public
   */
  public $sSubscription = null;

  /**
   *
   * @param string $sCLTRID
   * @param Credential $credential
   * @param string $sShopper
   * @param string $sEmailAddress
   * @param string $sSubscription
   * @access public
   */
  public function __construct($sCLTRID, $credential, $sShopper, $sEmailAddress, $sSubscription)
  {
    $this->sCLTRID = $sCLTRID;
    $this->credential = $credential;
    $this->sShopper = $sShopper;
    $this->sEmailAddress = $sEmailAddress;
    $this->sSubscription = $sSubscription;
  }

}
