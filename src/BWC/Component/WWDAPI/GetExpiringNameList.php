<?php

namespace BWC\Component\WWDAPI;

class GetExpiringNameList
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
   * @var string $sUser
   * @access public
   */
  public $sUser = null;

  /**
   *
   * @var int $nLength
   * @access public
   */
  public $nLength = null;

  /**
   *
   * @var string $sDashes
   * @access public
   */
  public $sDashes = null;

  /**
   *
   * @var string $sNumbers
   * @access public
   */
  public $sNumbers = null;

  /**
   *
   * @var string $sWildCardSearch
   * @access public
   */
  public $sWildCardSearch = null;

  /**
   *
   * @var string $sSearchCriteria
   * @access public
   */
  public $sSearchCriteria = null;

  /**
   *
   * @var string $sTLDs
   * @access public
   */
  public $sTLDs = null;

  /**
   *
   * @var int $nPage
   * @access public
   */
  public $nPage = null;

  /**
   *
   * @var int $nRowsPerPage
   * @access public
   */
  public $nRowsPerPage = null;

  /**
   *
   * @param string $sCLTRID
   * @param Credential $credential
   * @param string $sUser
   * @param int $nLength
   * @param string $sDashes
   * @param string $sNumbers
   * @param string $sWildCardSearch
   * @param string $sSearchCriteria
   * @param string $sTLDs
   * @param int $nPage
   * @param int $nRowsPerPage
   * @access public
   */
  public function __construct($sCLTRID, $credential, $sUser, $nLength, $sDashes, $sNumbers, $sWildCardSearch, $sSearchCriteria, $sTLDs, $nPage, $nRowsPerPage)
  {
    $this->sCLTRID = $sCLTRID;
    $this->credential = $credential;
    $this->sUser = $sUser;
    $this->nLength = $nLength;
    $this->sDashes = $sDashes;
    $this->sNumbers = $sNumbers;
    $this->sWildCardSearch = $sWildCardSearch;
    $this->sSearchCriteria = $sSearchCriteria;
    $this->sTLDs = $sTLDs;
    $this->nPage = $nPage;
    $this->nRowsPerPage = $nRowsPerPage;
  }

}
