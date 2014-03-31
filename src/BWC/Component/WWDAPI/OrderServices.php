<?php

namespace BWC\Component\WWDAPI;

class OrderServices
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
   * @var Shopper $shopper
   * @access public
   */
  public $shopper = null;

  /**
   *
   * @var ProductGroup[] $ProductGroupArray
   * @access public
   */
  public $ProductGroupArray = null;

  /**
   *
   * @var string $sROID
   * @access public
   */
  public $sROID = null;

  /**
   *
   * @param string $sCLTRID
   * @param Credential $credential
   * @param Shopper $shopper
   * @param ProductGroup[] $ProductGroupArray
   * @param string $sROID
   * @access public
   */
  public function __construct($sCLTRID, $credential, $shopper, $ProductGroupArray, $sROID)
  {
    $this->sCLTRID = $sCLTRID;
    $this->credential = $credential;
    $this->shopper = $shopper;
    $this->ProductGroupArray = $ProductGroupArray;
    $this->sROID = $sROID;
  }

}
