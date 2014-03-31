<?php

namespace BWC\Component\WWDAPI;

class OrderItem
{

  /**
   *
   * @var int $productid
   * @access public
   */
  public $productid = null;

  /**
   *
   * @var string $parent_resource_id
   * @access public
   */
  public $parent_resource_id = null;

  /**
   *
   * @var int $quantity
   * @access public
   */
  public $quantity = null;

  /**
   *
   * @var string $riid
   * @access public
   */
  public $riid = null;

  /**
   *
   * @var float $duration
   * @access public
   */
  public $duration = null;

  /**
   *
   * @param int $productid
   * @param string $parent_resource_id
   * @param int $quantity
   * @param string $riid
   * @param float $duration
   * @access public
   */
  public function __construct($productid, $parent_resource_id = null, $quantity = 1, $riid = "1", $duration = 1.0)
  {
    $this->productid = $productid;
    $this->parent_resource_id = $parent_resource_id;
    $this->quantity = $quantity;
    $this->riid = $riid;
    $this->duration = $duration;
  }

}
