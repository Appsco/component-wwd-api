<?php

namespace BWC\Component\WWDAPI;

class NS
{

  /**
   *
   * @var string $name
   * @access public
   */
  public $name = null;

  /**
   *
   * @param string $name
   * @access public
   */
  public function __construct($name)
  {
    $this->name = $name;
  }

}
