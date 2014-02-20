<?php

namespace BWC\Component\WWDAPI;

class DomainRenewal {

  /**
   * Order item
   * @var OrderItem
   */
  public $order;

  /**
   * The resource ID
   * @var string
   */
  public $resourceid;

  /**
   * Second-level domain
   * @var string
   */
  public $sld;

  /**
   * Top-level domain
   * @var string
   */
  public $tld;

  /**
   * Length of the registration, in years
   * Valid values for most are 1-10
   * @var integer
   */
  public $period;


  public function __construct(OrderItem $item, $resourceId, $tld, $sld, $period) {
    $this->order = (array) $item;
    $this->resourceid = $resourceId;
    $this->tld = $tld;
    $this->sld = $sld;
    $this->period = $period;
  }

}