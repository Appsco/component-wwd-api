<?php

namespace BWC\Component\WWDAPI;

class RemoveDomainAlert
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
   * @var string $sDomainMonitorID
   * @access public
   */
  public $sDomainMonitorID = null;

  /**
   *
   * @var string $sUser
   * @access public
   */
  public $sUser = null;

  /**
   *
   * @param string $sCLTRID
   * @param Credential $credential
   * @param string $sDomainMonitorID
   * @param string $sUser
   * @access public
   */
  public function __construct($sCLTRID, $credential, $sDomainMonitorID, $sUser)
  {
    $this->sCLTRID = $sCLTRID;
    $this->credential = $credential;
    $this->sDomainMonitorID = $sDomainMonitorID;
    $this->sUser = $sUser;
  }

}
