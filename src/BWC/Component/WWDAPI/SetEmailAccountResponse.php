<?php

namespace BWC\Component\WWDAPI;

class SetEmailAccountResponse
{

  /**
   *
   * @var string $SetEmailAccountResult
   * @access public
   */
  public $SetEmailAccountResult = null;

  /**
   *
   * @param string $SetEmailAccountResult
   * @access public
   */
  public function __construct($SetEmailAccountResult)
  {
    $this->SetEmailAccountResult = $SetEmailAccountResult;
  }

}
