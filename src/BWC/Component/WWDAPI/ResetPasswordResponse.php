<?php

namespace BWC\Component\WWDAPI;

class ResetPasswordResponse
{

  /**
   *
   * @var string $ResetPasswordResult
   * @access public
   */
  public $ResetPasswordResult = null;

  /**
   *
   * @param string $ResetPasswordResult
   * @access public
   */
  public function __construct($ResetPasswordResult)
  {
    $this->ResetPasswordResult = $ResetPasswordResult;
  }

}
