<?php

namespace BWC\Component\WWDAPI;

class DomainContacts
{

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
   * @param ContactInfo $registrant
   * @param ContactInfo $admin
   * @param ContactInfo $billing
   * @param ContactInfo $tech
   * @access public
   */
  public function __construct($registrant, $admin, $billing, $tech)
  {
    $this->registrant = $registrant;
    $this->admin = $admin;
    $this->billing = $billing;
    $this->tech = $tech;
  }

}
