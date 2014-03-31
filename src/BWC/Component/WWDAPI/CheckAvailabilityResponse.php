<?php

namespace BWC\Component\WWDAPI;

class CheckAvailabilityResponse
{

  /**
   *
   * @var string $CheckAvailabilityResult
   * @access public
   */
  public $CheckAvailabilityResult = null;

  /**
   *
   * @param string $CheckAvailabilityResult
   * @access public
   */
  public function __construct($CheckAvailabilityResult)
  {
    $this->CheckAvailabilityResult = $CheckAvailabilityResult;
  }

}
