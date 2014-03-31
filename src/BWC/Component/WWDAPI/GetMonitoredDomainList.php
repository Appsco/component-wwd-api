<?php

namespace BWC\Component\WWDAPI;

class GetMonitoredDomainList
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
   * @param int $nPage
   * @param int $nRowsPerPage
   * @access public
   */
  public function __construct($sCLTRID, $credential, $sUser, $nPage, $nRowsPerPage)
  {
    $this->sCLTRID = $sCLTRID;
    $this->credential = $credential;
    $this->sUser = $sUser;
    $this->nPage = $nPage;
    $this->nRowsPerPage = $nRowsPerPage;
  }

}
