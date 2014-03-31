<?php

namespace BWC\Component\WWDAPI;

class GetEmailAddressInfoForShopper
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
   * @var string $sEmailAddress
   * @access public
   */
  public $sEmailAddress = null;

  /**
   *
   * @var int $nDynamicData
   * @access public
   */
  public $nDynamicData = null;

  /**
   *
   * @var int $nType
   * @access public
   */
  public $nType = null;

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
   * @param string $sEmailAddress
   * @param int $nDynamicData
   * @param int $nType
   * @param boolean $bActive
   * @access public
   */
  public function __construct($sCLTRID, $credential, $returnCfg, $sShopper, $sEmailAddress, $nDynamicData, $nType, $bActive)
  {
    $this->sCLTRID = $sCLTRID;
    $this->credential = $credential;
    $this->returnCfg = $returnCfg;
    $this->sShopper = $sShopper;
    $this->sEmailAddress = $sEmailAddress;
    $this->nDynamicData = $nDynamicData;
    $this->nType = $nType;
    $this->bActive = $bActive;
  }

}
