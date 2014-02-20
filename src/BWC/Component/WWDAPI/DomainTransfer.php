<?php

namespace BWC\Component\WWDAPI;

class DomainTransfer {

  /**
   * Order item
   * @var OrderItem
   */
  public $order;

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

  public function __construct(OrderItem $item, $tld, $sld) {
    $this->order = (array) $item;
    $this->tld = $tld;
    $this->sld = $sld;
  }

}