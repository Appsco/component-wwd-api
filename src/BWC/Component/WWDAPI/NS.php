<?php

namespace BWC\Component\WWDAPI;

class NS {

  /**
   * Nameserver name
   * @var string
   */
  public $name;

  public function __construct($name = null) {
    $this->name = $name;
  }

}