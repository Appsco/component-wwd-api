<?php

namespace BWC\Component\WWDAPI;

class MoveEmailAccount
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
   * @var string $sResourceID
   * @access public
   */
  public $sResourceID = null;

  /**
   *
   * @var int $nDiskSpace
   * @access public
   */
  public $nDiskSpace = null;

  /**
   *
   * @param string $sCLTRID
   * @param Credential $credential
   * @param string $sShopper
   * @param string $sEmailAddress
   * @param string $sResourceID
   * @param int $nDiskSpace
   * @access public
   */
  public function __construct($sCLTRID, $credential, $sShopper, $sEmailAddress, $sResourceID, $nDiskSpace)
  {
    $this->sCLTRID = $sCLTRID;
    $this->credential = $credential;
    $this->sShopper = $sShopper;
    $this->sEmailAddress = $sEmailAddress;
    $this->sResourceID = $sResourceID;
    $this->nDiskSpace = $nDiskSpace;
  }

}
