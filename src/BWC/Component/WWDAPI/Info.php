<?php

namespace BWC\Component\WWDAPI;

class Info
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
   * @var string $sType
   * @access public
   */
  public $sType = null;

  /**
   *
   * @var string $sDomain
   * @access public
   */
  public $sDomain = null;

  /**
   *
   * @var string $sOrderID
   * @access public
   */
  public $sOrderID = null;

  /**
   *
   * @param string $sCLTRID
   * @param Credential $credential
   * @param string $sResourceID
   * @param string $sType
   * @param string $sDomain
   * @param string $sOrderID
   * @access public
   */
  public function __construct($sCLTRID, $credential, $sResourceID, $sType, $sDomain, $sOrderID)
  {
    $this->sCLTRID = $sCLTRID;
    $this->credential = $credential;
    $this->sResourceID = $sResourceID;
    $this->sType = $sType;
    $this->sDomain = $sDomain;
    $this->sOrderID = $sOrderID;
  }

}
