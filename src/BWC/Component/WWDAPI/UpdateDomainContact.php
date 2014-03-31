<?php

namespace BWC\Component\WWDAPI;

class UpdateDomainContact
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
   * @var ContactInfo $registrant
   * @access public
   */
  public $registrant = null;

  /**
   *
   * @var ContactInfo $admin
   * @access public
   */
  public $admin = null;

  /**
   *
   * @var ContactInfo $billing
   * @access public
   */
  public $billing = null;

  /**
   *
   * @var ContactInfo $tech
   * @access public
   */
  public $tech = null;

  /**
   *
   * @param string $sCLTRID
   * @param Credential $credential
   * @param Domain[] $domainArray
   * @param ContactInfo $registrant
   * @param ContactInfo $admin
   * @param ContactInfo $billing
   * @param ContactInfo $tech
   * @access public
   */
  public function __construct($sCLTRID, $credential, $domainArray, $registrant, $admin, $billing, $tech)
  {
    $this->sCLTRID = $sCLTRID;
    $this->credential = $credential;
    $this->domainArray = $domainArray;
    $this->registrant = $registrant;
    $this->admin = $admin;
    $this->billing = $billing;
    $this->tech = $tech;
  }

}
