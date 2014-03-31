<?php

namespace BWC\Component\WWDAPI;

class UpdateDomainAlert
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
   * @var DomainAlert $domainAlert
   * @access public
   */
  public $domainAlert = null;

  /**
   *
   * @var string $sDomainMonitorID
   * @access public
   */
  public $sDomainMonitorID = null;

  /**
   *
   * @var ContactInfo $registrant
   * @access public
   */
  public $registrant = null;

  /**
   *
   * @param string $sCLTRID
   * @param Credential $credential
   * @param DomainAlert $domainAlert
   * @param string $sDomainMonitorID
   * @param ContactInfo $registrant
   * @access public
   */
  public function __construct($sCLTRID, $credential, $domainAlert, $sDomainMonitorID, $registrant)
  {
    $this->sCLTRID = $sCLTRID;
    $this->credential = $credential;
    $this->domainAlert = $domainAlert;
    $this->sDomainMonitorID = $sDomainMonitorID;
    $this->registrant = $registrant;
  }

}
