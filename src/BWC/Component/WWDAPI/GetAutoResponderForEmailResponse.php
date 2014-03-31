<?php

namespace BWC\Component\WWDAPI;

class GetAutoResponderForEmailResponse
{

  /**
   *
   * @var string $GetAutoResponderForEmailResult
   * @access public
   */
  public $GetAutoResponderForEmailResult = null;

  /**
   *
   * @param string $GetAutoResponderForEmailResult
   * @access public
   */
  public function __construct($GetAutoResponderForEmailResult)
  {
    $this->GetAutoResponderForEmailResult = $GetAutoResponderForEmailResult;
  }

}
