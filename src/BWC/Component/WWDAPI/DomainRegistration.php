<?php

namespace BWC\Component\WWDAPI;

class DomainRegistration
{

  /**
   *
   * @var OrderItem $order
   * @access public
   */
  public $order = null;

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
   * @var string $idnScript
   * @access public
   */
  public $idnScript = null;

  /**
   *
   * @var int $period
   * @access public
   */
  public $period = null;

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
   * @var NS[] $nsArray
   * @access public
   */
  public $nsArray = null;

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
   * @var int $autorenewflag
   * @access public
   */
  public $autorenewflag = null;

  /**
   *
   * @var string $customDataXML
   * @access public
   */
  public $customDataXML = null;

  /**
   *
   * @param OrderItem $order
   * @param string $sld
   * @param string $tld
   * @param string $idnScript
   * @param int $period
   * @param ContactInfo $registrant
   * @param Nexus $nexus
   * @param NS[] $nsArray
   * @param ContactInfo $admin
   * @param ContactInfo $billing
   * @param ContactInfo $tech
   * @param int $autorenewflag
   * @param string $customDataXML
   * @access public
   */
  public function __construct(OrderItem $order, $sld, $tld, $period, ContactInfo $registrant, $idnScript = null,
      Nexus $nexus = null, $nsArray = null, ContactInfo $admin = null, ContactInfo $billing = null, ContactInfo $tech = null,
      $autorenewflag = 0, $customDataXML = null)
  {
    $this->order = $order;
    $this->sld = $sld;
    $this->tld = $tld;
    $this->idnScript = $idnScript;
    $this->period = $period;
    $this->registrant = $registrant;
    $this->nexus = $nexus;
    $this->nsArray = $nsArray;
    $this->admin = $admin;
    $this->billing = $billing;
    $this->tech = $tech;
    $this->autorenewflag = $autorenewflag;
    $this->customDataXML = $customDataXML;
  }

}
