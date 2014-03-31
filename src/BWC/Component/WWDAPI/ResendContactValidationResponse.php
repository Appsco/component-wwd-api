<?php

namespace BWC\Component\WWDAPI;

class ResendContactValidationResponse
{

  /**
   *
   * @var string $ResendContactValidationResult
   * @access public
   */
  public $ResendContactValidationResult = null;

  /**
   *
   * @param string $ResendContactValidationResult
   * @access public
   */
  public function __construct($ResendContactValidationResult)
  {
    $this->ResendContactValidationResult = $ResendContactValidationResult;
  }

}
