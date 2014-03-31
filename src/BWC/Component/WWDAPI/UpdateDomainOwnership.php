<?php

namespace BWC\Component\WWDAPI;

class UpdateDomainOwnership
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
   * @var string $sResourceID
   * @access public
   */
  public $sResourceID = null;

  /**
   *
   * @var string $sLosingOwner
   * @access public
   */
  public $sLosingOwner = null;

  /**
   *
   * @var GainingOwner $gaining
   * @access public
   */
  public $gaining = null;

  /**
   *
   * @param string $sCLTRID
   * @param Credential $credential
   * @param string $sResourceID
   * @param string $sLosingOwner
   * @param GainingOwner $gaining
   * @access public
   */
  public function __construct($sCLTRID, $credential, $sResourceID, $sLosingOwner, $gaining)
  {
    $this->sCLTRID = $sCLTRID;
    $this->credential = $credential;
    $this->sResourceID = $sResourceID;
    $this->sLosingOwner = $sLosingOwner;
    $this->gaining = $gaining;
  }

}
