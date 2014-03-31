<?php

namespace BWC\Component\WWDAPI;

class GetStatusForEmailResponse
{

  /**
   *
   * @var string $GetStatusForEmailResult
   * @access public
   */
  public $GetStatusForEmailResult = null;

  /**
   *
   * @param string $GetStatusForEmailResult
   * @access public
   */
  public function __construct($GetStatusForEmailResult)
  {
    $this->GetStatusForEmailResult = $GetStatusForEmailResult;
  }

}
