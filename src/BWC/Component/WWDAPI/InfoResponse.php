<?php

namespace BWC\Component\WWDAPI;

class InfoResponse
{

  /**
   *
   * @var string $InfoResult
   * @access public
   */
  public $InfoResult = null;

  /**
   *
   * @param string $InfoResult
   * @access public
   */
  public function __construct($InfoResult)
  {
    $this->InfoResult = $InfoResult;
  }

}
