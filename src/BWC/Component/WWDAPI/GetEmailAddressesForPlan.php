<?php

namespace BWC\Component\WWDAPI;

class GetEmailAddressesForPlan
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
   * @var ReturnConfig $returnCfg
   * @access public
   */
  public $returnCfg = null;

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
   * @var boolean $bActive
   * @access public
   */
  public $bActive = null;

  /**
   *
   * @param string $sCLTRID
   * @param Credential $credential
   * @param ReturnConfig $returnCfg
   * @param string $sShopper
   * @param string $sResourceID
   * @param boolean $bActive
   * @access public
   */
  public function __construct($sCLTRID, $credential, $returnCfg, $sShopper, $sResourceID, $bActive)
  {
    $this->sCLTRID = $sCLTRID;
    $this->credential = $credential;
    $this->returnCfg = $returnCfg;
    $this->sShopper = $sShopper;
    $this->sResourceID = $sResourceID;
    $this->bActive = $bActive;
  }

}
