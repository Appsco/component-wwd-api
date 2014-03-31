<?php

namespace BWC\Component\WWDAPI;

class DomainRenewal
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
   * @var int $period
   * @access public
   */
  public $period = null;

  /**
   *
   * @param OrderItem $order
   * @param string $resourceid
   * @param string $sld
   * @param string $tld
   * @param int $period
   * @access public
   */
  public function __construct($order, $resourceid, $sld, $tld, $period)
  {
    $this->order = $order;
    $this->resourceid = $resourceid;
    $this->sld = $sld;
    $this->tld = $tld;
    $this->period = $period;
  }

}
