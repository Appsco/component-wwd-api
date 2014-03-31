<?php

namespace BWC\Component\WWDAPI;

class Nexus
{

  /**
   *
   * @var string $category
   * @access public
   */
  public $category = null;

  /**
   *
   * @var string $use
   * @access public
   */
  public $use = null;

  /**
   *
   * @var string $country
   * @access public
   */
  public $country = null;

  /**
   *
   * @param string $category
   * @param string $use
   * @param string $country
   * @access public
   */
  public function __construct($category, $use, $country)
  {
    $this->category = $category;
    $this->use = $use;
    $this->country = $country;
  }

}
