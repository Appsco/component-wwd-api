<?php

namespace BWC\Component\WWDAPI;

class GetCatchallStatusForEmailResponse
{

  /**
   *
   * @var string $GetCatchallStatusForEmailResult
   * @access public
   */
  public $GetCatchallStatusForEmailResult = null;

  /**
   *
   * @param string $GetCatchallStatusForEmailResult
   * @access public
   */
  public function __construct($GetCatchallStatusForEmailResult)
  {
    $this->GetCatchallStatusForEmailResult = $GetCatchallStatusForEmailResult;
  }

}
