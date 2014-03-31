<?php

namespace BWC\Component\WWDAPI;

class SetAutoResponderResponse
{

  /**
   *
   * @var string $SetAutoResponderResult
   * @access public
   */
  public $SetAutoResponderResult = null;

  /**
   *
   * @param string $SetAutoResponderResult
   * @access public
   */
  public function __construct($SetAutoResponderResult)
  {
    $this->SetAutoResponderResult = $SetAutoResponderResult;
  }

}
