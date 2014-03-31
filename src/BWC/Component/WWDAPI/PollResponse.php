<?php

namespace BWC\Component\WWDAPI;

class PollResponse
{

  /**
   *
   * @var string $PollResult
   * @access public
   */
  public $PollResult = null;

  /**
   *
   * @param string $PollResult
   * @access public
   */
  public function __construct($PollResult)
  {
    $this->PollResult = $PollResult;
  }

}
