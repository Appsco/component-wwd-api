<?php

namespace BWC\Component\WWDAPI;

class ValidateRegistrationResponse
{

  /**
   *
   * @var string $ValidateRegistrationResult
   * @access public
   */
  public $ValidateRegistrationResult = null;

  /**
   *
   * @param string $ValidateRegistrationResult
   * @access public
   */
  public function __construct($ValidateRegistrationResult)
  {
    $this->ValidateRegistrationResult = $ValidateRegistrationResult;
  }

}
