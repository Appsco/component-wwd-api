<?php

namespace BWC\Component\WWDAPI;

class CheckAvailability
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
   * @var String[] $sDomainArray
   * @access public
   */
  public $sDomainArray = null;

  /**
   *
   * @var String[] $sHostArray
   * @access public
   */
  public $sHostArray = null;

  /**
   *
   * @var String[] $sNSArray
   * @access public
   */
  public $sNSArray = null;

  /**
   *
   * @param string $sCLTRID
   * @param Credential $credential
   * @param String[] $sDomainArray
   * @param String[] $sHostArray
   * @param String[] $sNSArray
   * @access public
   */
  public function __construct($sCLTRID, $credential, $sDomainArray, $sHostArray, $sNSArray)
  {
    $this->sCLTRID = $sCLTRID;
    $this->credential = $credential;
    $this->sDomainArray = $sDomainArray;
    $this->sHostArray = $sHostArray;
    $this->sNSArray = $sNSArray;
  }

}
