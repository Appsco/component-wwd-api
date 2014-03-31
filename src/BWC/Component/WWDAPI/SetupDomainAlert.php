<?php

namespace BWC\Component\WWDAPI;

class SetupDomainAlert
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
   * @var ContactInfo $registrant
   * @access public
   */
  public $registrant = null;

  /**
   *
   * @param string $sCLTRID
   * @param Credential $credential
   * @param DomainAlert $domainAlert
   * @param ContactInfo $registrant
   * @access public
   */
  public function __construct($sCLTRID, $credential, $domainAlert, $registrant)
  {
    $this->sCLTRID = $sCLTRID;
    $this->credential = $credential;
    $this->domainAlert = $domainAlert;
    $this->registrant = $registrant;
  }

}
