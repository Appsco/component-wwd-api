<?php

namespace BWC\Component\WWDAPI;

class RenameEmailPlan
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
   * @var string $sResourceID
   * @access public
   */
  public $sResourceID = null;

  /**
   *
   * @var string $sName
   * @access public
   */
  public $sName = null;

  /**
   *
   * @param string $sCLTRID
   * @param Credential $credential
   * @param string $sShopper
   * @param string $sResourceID
   * @param string $sName
   * @access public
   */
  public function __construct($sCLTRID, $credential, $sShopper, $sResourceID, $sName)
  {
    $this->sCLTRID = $sCLTRID;
    $this->credential = $credential;
    $this->sShopper = $sShopper;
    $this->sResourceID = $sResourceID;
    $this->sName = $sName;
  }

}
