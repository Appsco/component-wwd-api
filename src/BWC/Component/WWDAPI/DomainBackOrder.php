<?php

namespace BWC\Component\WWDAPI;

class DomainBackOrder
{

  /**
   *
   * @var OrderItem $order
   * @access public
   */
  public $order = null;

  /**
   *
   * @var boolean $privateBackOrder
   * @access public
   */
  public $privateBackOrder = null;

  /**
   *
   * @var string $sld
   * @access public
   */
  public $sld = null;

  /**
   *
   * @var string $tld
   * @access public
   */
  public $tld = null;

  /**
   *
   * @var ContactInfo $registrant
   * @access public
   */
  public $registrant = null;

  /**
   *
   * @var Nexus $nexus
   * @access public
   */
  public $nexus = null;

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
   * @param OrderItem $order
   * @param boolean $privateBackOrder
   * @param string $sld
   * @param string $tld
   * @param ContactInfo $registrant
   * @param Nexus $nexus
   * @param ContactInfo $admin
   * @param ContactInfo $billing
   * @param ContactInfo $tech
   * @access public
   */
  public function __construct($order, $privateBackOrder, $sld, $tld, $registrant, $nexus, $admin, $billing, $tech)
  {
    $this->order = $order;
    $this->privateBackOrder = $privateBackOrder;
    $this->sld = $sld;
    $this->tld = $tld;
    $this->registrant = $registrant;
    $this->nexus = $nexus;
    $this->admin = $admin;
    $this->billing = $billing;
    $this->tech = $tech;
  }

}
