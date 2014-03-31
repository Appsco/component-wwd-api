<?php

namespace BWC\Component\WWDAPI;

class DomainForwarding
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
   * @var int $nDomainID
   * @access public
   */
  public $nDomainID = null;

  /**
   *
   * @var string $sForwardingURL
   * @access public
   */
  public $sForwardingURL = null;

  /**
   *
   * @var string $sMngTRID
   * @access public
   */
  public $sMngTRID = null;

  /**
   *
   * @param string $sCLTRID
   * @param Credential $credential
   * @param string $sUser
   * @param int $nDomainID
   * @param string $sForwardingURL
   * @param string $sMngTRID
   * @access public
   */
  public function __construct($sCLTRID, $credential, $sUser, $nDomainID, $sForwardingURL, $sMngTRID)
  {
    $this->sCLTRID = $sCLTRID;
    $this->credential = $credential;
    $this->sUser = $sUser;
    $this->nDomainID = $nDomainID;
    $this->sForwardingURL = $sForwardingURL;
    $this->sMngTRID = $sMngTRID;
  }

}
