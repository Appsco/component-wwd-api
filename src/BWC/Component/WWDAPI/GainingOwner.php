<?php

namespace BWC\Component\WWDAPI;

class GainingOwner
{

  /**
   *
   * @var ShopperNoDBP $shopperNoDBP
   * @access public
   */
  public $shopperNoDBP = null;

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
   * @param ShopperNoDBP $shopperNoDBP
   * @param ContactInfo $registrant
   * @param ContactInfo $admin
   * @param ContactInfo $billing
   * @param ContactInfo $tech
   * @access public
   */
  public function __construct($shopperNoDBP, $registrant, $admin, $billing, $tech)
  {
    $this->shopperNoDBP = $shopperNoDBP;
    $this->registrant = $registrant;
    $this->admin = $admin;
    $this->billing = $billing;
    $this->tech = $tech;
  }

}
