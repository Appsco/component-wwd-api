<?php

namespace BWC\Component\WWDAPI;

class SetShopperInfo
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
   * @var string $sEmail
   * @access public
   */
  public $sEmail = null;

  /**
   *
   * @var string $sFirstName
   * @access public
   */
  public $sFirstName = null;

  /**
   *
   * @var string $sLastName
   * @access public
   */
  public $sLastName = null;

  /**
   *
   * @var string $sPhone
   * @access public
   */
  public $sPhone = null;

  /**
   *
   * @var string $sFax
   * @access public
   */
  public $sFax = null;

  /**
   *
   * @var string $sCompany
   * @access public
   */
  public $sCompany = null;

  /**
   *
   * @var string $sAddress
   * @access public
   */
  public $sAddress = null;

  /**
   *
   * @var string $sCity
   * @access public
   */
  public $sCity = null;

  /**
   *
   * @var string $sState
   * @access public
   */
  public $sState = null;

  /**
   *
   * @var string $sZip
   * @access public
   */
  public $sZip = null;

  /**
   *
   * @var string $sCountry
   * @access public
   */
  public $sCountry = null;

  /**
   *
   * @var string $sShopperPin
   * @access public
   */
  public $sShopperPin = null;

  /**
   *
   * @param string $sCLTRID
   * @param Credential $credential
   * @param string $sUser
   * @param string $sEmail
   * @param string $sFirstName
   * @param string $sLastName
   * @param string $sPhone
   * @param string $sFax
   * @param string $sCompany
   * @param string $sAddress
   * @param string $sCity
   * @param string $sState
   * @param string $sZip
   * @param string $sCountry
   * @param string $sShopperPin
   * @access public
   */
  public function __construct($sCLTRID, $credential, $sUser, $sEmail, $sFirstName, $sLastName, $sPhone, $sFax, $sCompany, $sAddress, $sCity, $sState, $sZip, $sCountry, $sShopperPin)
  {
    $this->sCLTRID = $sCLTRID;
    $this->credential = $credential;
    $this->sUser = $sUser;
    $this->sEmail = $sEmail;
    $this->sFirstName = $sFirstName;
    $this->sLastName = $sLastName;
    $this->sPhone = $sPhone;
    $this->sFax = $sFax;
    $this->sCompany = $sCompany;
    $this->sAddress = $sAddress;
    $this->sCity = $sCity;
    $this->sState = $sState;
    $this->sZip = $sZip;
    $this->sCountry = $sCountry;
    $this->sShopperPin = $sShopperPin;
  }

}
