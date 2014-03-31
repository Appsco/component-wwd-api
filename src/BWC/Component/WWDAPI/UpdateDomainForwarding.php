<?php

namespace BWC\Component\WWDAPI;

class UpdateDomainForwarding
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
   * @var Domain[] $domainArray
   * @access public
   */
  public $domainArray = null;

  /**
   *
   * @var string $sAction
   * @access public
   */
  public $sAction = null;

  /**
   *
   * @var string $sForwardingURL
   * @access public
   */
  public $sForwardingURL = null;

  /**
   *
   * @param string $sCLTRID
   * @param Credential $credential
   * @param Domain[] $domainArray
   * @param string $sAction
   * @param string $sForwardingURL
   * @access public
   */
  public function __construct($sCLTRID, $credential, $domainArray, $sAction, $sForwardingURL)
  {
    $this->sCLTRID = $sCLTRID;
    $this->credential = $credential;
    $this->domainArray = $domainArray;
    $this->sAction = $sAction;
    $this->sForwardingURL = $sForwardingURL;
  }

}
