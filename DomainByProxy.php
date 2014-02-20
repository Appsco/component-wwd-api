<?php

namespace BWC\Component\WWDAPI;

class DomainByProxy {

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
   * The resource ID
   * @var string
   */
  public $resourceid;

  public function __construct(OrderItem $item, $sld, $tld, $resourceId = null, $riid = null) {
    $this->order = $item;
    $this->sld = $sld;
    $this->tld = $tld;
    $this->resourceid = $resourceId;
    if ($riid) {
      $this->riid = $riid;
    } else {
      $this->riid = rand(1, 50);
    }
  }

}