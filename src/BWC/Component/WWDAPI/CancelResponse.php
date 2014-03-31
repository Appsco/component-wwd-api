<?php

namespace BWC\Component\WWDAPI;

class CancelResponse
{

  /**
   *
   * @var string $CancelResult
   * @access public
   */
  public $CancelResult = null;

  /**
   *
   * @param string $CancelResult
   * @access public
   */
  public function __construct($CancelResult)
  {
    $this->CancelResult = $CancelResult;
  }

}
