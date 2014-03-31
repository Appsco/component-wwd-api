<?php

namespace BWC\Component\WWDAPI;

class CheckUserResponse
{

  /**
   *
   * @var string $CheckUserResult
   * @access public
   */
  public $CheckUserResult = null;

  /**
   *
   * @param string $CheckUserResult
   * @access public
   */
  public function __construct($CheckUserResult)
  {
    $this->CheckUserResult = $CheckUserResult;
  }

}
