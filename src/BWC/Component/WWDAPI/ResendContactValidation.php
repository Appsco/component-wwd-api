<?php

namespace BWC\Component\WWDAPI;

class ResendContactValidation
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
   * @var string $sShopperID
   * @access public
   */
  public $sShopperID = null;

  /**
   *
   * @var string $sDomain
   * @access public
   */
  public $sDomain = null;

  /**
   *
   * @param string $sCLTRID
   * @param Credential $credential
   * @param string $sShopperID
   * @param string $sDomain
   * @access public
   */
  public function __construct($sCLTRID, $credential, $sShopperID, $sDomain)
  {
    $this->sCLTRID = $sCLTRID;
    $this->credential = $credential;
    $this->sShopperID = $sShopperID;
    $this->sDomain = $sDomain;
  }

}
