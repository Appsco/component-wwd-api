<?php

namespace BWC\Component\WWDAPI;

class NameGenDBWithTimeLimitResponse
{

  /**
   *
   * @var string $NameGenDBWithTimeLimitResult
   * @access public
   */
  public $NameGenDBWithTimeLimitResult = null;

  /**
   *
   * @param string $NameGenDBWithTimeLimitResult
   * @access public
   */
  public function __construct($NameGenDBWithTimeLimitResult)
  {
    $this->NameGenDBWithTimeLimitResult = $NameGenDBWithTimeLimitResult;
  }

}
