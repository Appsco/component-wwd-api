<?php

namespace BWC\Component\WWDAPI;

class DomainByProxy
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
   * @var string $resourceid
   * @access public
   */
  public $resourceid = null;

  /**
   *
   * @param OrderItem $order
   * @param string $sld
   * @param string $tld
   * @param string $resourceid
   * @access public
   */
  public function __construct($order, $sld, $tld, $resourceid)
  {
    $this->order = $order;
    $this->sld = $sld;
    $this->tld = $tld;
    $this->resourceid = $resourceid;
  }

}
