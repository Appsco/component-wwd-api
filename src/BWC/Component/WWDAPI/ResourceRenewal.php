<?php

namespace BWC\Component\WWDAPI;

class ResourceRenewal
{

  /**
   *
   * @var OrderItem $order
   * @access public
   */
  public $order = null;

  /**
   *
   * @var string $resourceid
   * @access public
   */
  public $resourceid = null;

  /**
   *
   * @param OrderItem $order
   * @param string $resourceid
   * @access public
   */
  public function __construct($order, $resourceid)
  {
    $this->order = $order;
    $this->resourceid = $resourceid;
  }

}
