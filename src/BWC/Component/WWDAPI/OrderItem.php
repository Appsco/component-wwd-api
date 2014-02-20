<?php

namespace BWC\Component\WWDAPI;

class OrderItem {

  /**
   * The WWD product ID from the catalog of the item being purchased
   * @var integer
   */
  public $productid;

  /**
   * The quantity of item being purchased
   * @var integer
   */
  public $quantity;

  /**
   * The duration of the purchase.
   * @var float
   */
  public $duration;

  public function __construct($productId, $quantity, $duration = 1) {
    $this->productid = $productId;
    $this->quantity = $quantity;
    $this->duration = $duration;
    $this->riid = rand(1, 50);
  }

}