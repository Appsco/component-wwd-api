<?php

namespace BWC\Component\WWDAPI;

class GetEmailAddressesForShopper
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
   * @param int $nType
   * @param boolean $bActive
   * @access public
   */
  public function __construct($sCLTRID, $credential, $returnCfg, $sShopper, $nType, $bActive)
  {
    $this->sCLTRID = $sCLTRID;
    $this->credential = $credential;
    $this->returnCfg = $returnCfg;
    $this->sShopper = $sShopper;
    $this->nType = $nType;
    $this->bActive = $bActive;
  }

}
