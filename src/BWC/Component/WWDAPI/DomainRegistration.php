<?php

namespace BWC\Component\WWDAPI;

class DomainRegistration {

  /**
   * Step #3
   * {"@attributes":{"user":"834023","svTRID":"order.155499","clTRID":"519a2af1c7d4d"},"result":{"@attributes":{"code":"1000"},"msg":"processed 2 items"},"resdata":{"orderid":"155499"}}
   */

  /**
   * Order information
   * @var OrderItem
   */
  public $order;

  /**
   * Second level domain name
   * @var string
   */
  public $sld;

  /**
   * Top level domain name
   * @var string
   */
  public $tld;

  /**
   * Length of the registration in years
   * @var integer
   */
  public $period;

  /**
   * The registrant contact
   * @var ContactInfo
   */
  public $registrant;

  /**
   * @var array
   */
  public $nsArray;

  /**
   * Auto-renew
   * @var integer
   */
  public $autorenewflag = 1;

  public function __construct(OrderItem $order, $sld, $tld, $period, ContactInfo $registrant, array $nsArray, Nexus $nexus = null) {
    $this->order = (array) $order;
    $this->sld = $sld;
    $this->tld = $tld;
    $this->period = $period;
    $this->nsArray = $nsArray;
    if ($nexus) {
      $this->nexus = (array) $nexus;
    }
    $this->registrant = (array) $registrant;
    $this->admin = (array) $registrant;
    $this->billing = (array) $registrant;
    $this->tech = (array) $registrant;
  }

}