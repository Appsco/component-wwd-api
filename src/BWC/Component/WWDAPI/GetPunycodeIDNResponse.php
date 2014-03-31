<?php

namespace BWC\Component\WWDAPI;

class GetPunycodeIDNResponse
{

  /**
   *
   * @var string $GetPunycodeIDNResult
   * @access public
   */
  public $GetPunycodeIDNResult = null;

  /**
   *
   * @param string $GetPunycodeIDNResult
   * @access public
   */
  public function __construct($GetPunycodeIDNResult)
  {
    $this->GetPunycodeIDNResult = $GetPunycodeIDNResult;
  }

}
