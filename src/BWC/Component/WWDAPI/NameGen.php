<?php

namespace BWC\Component\WWDAPI;

class NameGen
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
   * @var string $sSLD
   * @access public
   */
  public $sSLD = null;

  /**
   *
   * @var string $sTLD
   * @access public
   */
  public $sTLD = null;

  /**
   *
   * @var string $sTLDs
   * @access public
   */
  public $sTLDs = null;

  /**
   *
   * @var int $nRows
   * @access public
   */
  public $nRows = null;

  /**
   *
   * @var boolean $bHypens
   * @access public
   */
  public $bHypens = null;

  /**
   *
   * @var boolean $bNumbers
   * @access public
   */
  public $bNumbers = null;

  /**
   *
   * @var int $nMaxLen
   * @access public
   */
  public $nMaxLen = null;

  /**
   *
   * @var boolean $bIntelliSearch
   * @access public
   */
  public $bIntelliSearch = null;

  /**
   *
   * @var int $nPage
   * @access public
   */
  public $nPage = null;

  /**
   *
   * @var string $sTime
   * @access public
   */
  public $sTime = null;

  /**
   *
   * @param string $sCLTRID
   * @param Credential $credential
   * @param string $sSLD
   * @param string $sTLD
   * @param string $sTLDs
   * @param int $nRows
   * @param boolean $bHypens
   * @param boolean $bNumbers
   * @param int $nMaxLen
   * @param boolean $bIntelliSearch
   * @param int $nPage
   * @param string $sTime
   * @access public
   */
  public function __construct($sCLTRID, $credential, $sSLD, $sTLD, $sTLDs, $nRows, $bHypens, $bNumbers, $nMaxLen, $bIntelliSearch, $nPage, $sTime)
  {
    $this->sCLTRID = $sCLTRID;
    $this->credential = $credential;
    $this->sSLD = $sSLD;
    $this->sTLD = $sTLD;
    $this->sTLDs = $sTLDs;
    $this->nRows = $nRows;
    $this->bHypens = $bHypens;
    $this->bNumbers = $bNumbers;
    $this->nMaxLen = $nMaxLen;
    $this->bIntelliSearch = $bIntelliSearch;
    $this->nPage = $nPage;
    $this->sTime = $sTime;
  }

}
