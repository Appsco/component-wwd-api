<?php

namespace BWC\Component\WWDAPI;

class GetEmailAddressesForDomain
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
   * @var string $sDomain
   * @access public
   */
  public $sDomain = null;

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
   * @param string $sDomain
   * @param int $nType
   * @param boolean $bActive
   * @access public
   */
  public function __construct($sCLTRID, $credential, $returnCfg, $sShopper, $sDomain, $nType, $bActive)
  {
    $this->sCLTRID = $sCLTRID;
    $this->credential = $credential;
    $this->returnCfg = $returnCfg;
    $this->sShopper = $sShopper;
    $this->sDomain = $sDomain;
    $this->nType = $nType;
    $this->bActive = $bActive;
  }

}
