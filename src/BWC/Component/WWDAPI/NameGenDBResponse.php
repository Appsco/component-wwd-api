<?php

namespace BWC\Component\WWDAPI;

class NameGenDBResponse
{

  /**
   *
   * @var string $NameGenDBResult
   * @access public
   */
  public $NameGenDBResult = null;

  /**
   *
   * @param string $NameGenDBResult
   * @access public
   */
  public function __construct($NameGenDBResult)
  {
    $this->NameGenDBResult = $NameGenDBResult;
  }

}
