<?php

namespace BWC\Component\WWDAPI;

class ValidateRegistration
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
   * @var DomainContacts $domainContacts
   * @access public
   */
  public $domainContacts = null;

  /**
   *
   * @var DomainData[] $domainDataArray
   * @access public
   */
  public $domainDataArray = null;

  /**
   *
   * @param string $sCLTRID
   * @param Credential $credential
   * @param DomainContacts $domainContacts
   * @param DomainData[] $domainDataArray
   * @access public
   */
  public function __construct($sCLTRID, $credential, $domainContacts, $domainDataArray)
  {
    $this->sCLTRID = $sCLTRID;
    $this->credential = $credential;
    $this->domainContacts = $domainContacts;
    $this->domainDataArray = $domainDataArray;
  }

}
