<?php

namespace BWC\Component\WWDAPI;

class NameGenDBWithTimeLimit
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
   * @var string $sKey
   * @access public
   */
  public $sKey = null;

  /**
   *
   * @var int $nMaxResults
   * @access public
   */
  public $nMaxResults = null;

  /**
   *
   * @var boolean $bExcludeTaken
   * @access public
   */
  public $bExcludeTaken = null;

  /**
   *
   * @var string $sTLDs
   * @access public
   */
  public $sTLDs = null;

  /**
   *
   * @var boolean $bAddPrefix
   * @access public
   */
  public $bAddPrefix = null;

  /**
   *
   * @var boolean $bAddSuffix
   * @access public
   */
  public $bAddSuffix = null;

  /**
   *
   * @var boolean $bAddDashes
   * @access public
   */
  public $bAddDashes = null;

  /**
   *
   * @var boolean $bAddRelated
   * @access public
   */
  public $bAddRelated = null;

  /**
   *
   * @var boolean $bAdvancedSplit
   * @access public
   */
  public $bAdvancedSplit = null;

  /**
   *
   * @var boolean $bBaseOnTop
   * @access public
   */
  public $bBaseOnTop = null;

  /**
   *
   * @var int $nMaxWaitSeconds
   * @access public
   */
  public $nMaxWaitSeconds = null;

  /**
   *
   * @param string $sCLTRID
   * @param Credential $credential
   * @param string $sKey
   * @param int $nMaxResults
   * @param boolean $bExcludeTaken
   * @param string $sTLDs
   * @param boolean $bAddPrefix
   * @param boolean $bAddSuffix
   * @param boolean $bAddDashes
   * @param boolean $bAddRelated
   * @param boolean $bAdvancedSplit
   * @param boolean $bBaseOnTop
   * @param int $nMaxWaitSeconds
   * @access public
   */
  public function __construct($sCLTRID, $credential, $sKey, $nMaxResults, $bExcludeTaken, $sTLDs, $bAddPrefix, $bAddSuffix, $bAddDashes, $bAddRelated, $bAdvancedSplit, $bBaseOnTop, $nMaxWaitSeconds)
  {
    $this->sCLTRID = $sCLTRID;
    $this->credential = $credential;
    $this->sKey = $sKey;
    $this->nMaxResults = $nMaxResults;
    $this->bExcludeTaken = $bExcludeTaken;
    $this->sTLDs = $sTLDs;
    $this->bAddPrefix = $bAddPrefix;
    $this->bAddSuffix = $bAddSuffix;
    $this->bAddDashes = $bAddDashes;
    $this->bAddRelated = $bAddRelated;
    $this->bAdvancedSplit = $bAdvancedSplit;
    $this->bBaseOnTop = $bBaseOnTop;
    $this->nMaxWaitSeconds = $nMaxWaitSeconds;
  }

}
