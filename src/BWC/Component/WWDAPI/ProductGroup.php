<?php

namespace BWC\Component\WWDAPI;

class ProductGroup
{

  /**
   *
   * @var OrderItem $OrderItem
   * @access public
   */
  public $OrderItem = null;

  /**
   *
   * @var OrderItem[] $OrderItemAddOnArray
   * @access public
   */
  public $OrderItemAddOnArray = null;

  /**
   *
   * @param OrderItem $OrderItem
   * @param OrderItem[] $OrderItemAddOnArray
   * @access public
   */
  public function __construct($OrderItem, $OrderItemAddOnArray)
  {
    $this->OrderItem = $OrderItem;
    $this->OrderItemAddOnArray = $OrderItemAddOnArray;
  }

}
