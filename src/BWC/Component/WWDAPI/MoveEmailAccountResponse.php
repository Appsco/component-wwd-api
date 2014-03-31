<?php

namespace BWC\Component\WWDAPI;

class MoveEmailAccountResponse
{

  /**
   *
   * @var string $MoveEmailAccountResult
   * @access public
   */
  public $MoveEmailAccountResult = null;

  /**
   *
   * @param string $MoveEmailAccountResult
   * @access public
   */
  public function __construct($MoveEmailAccountResult)
  {
    $this->MoveEmailAccountResult = $MoveEmailAccountResult;
  }

}
