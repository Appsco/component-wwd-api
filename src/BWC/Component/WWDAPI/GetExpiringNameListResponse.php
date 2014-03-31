<?php

namespace BWC\Component\WWDAPI;

class GetExpiringNameListResponse
{

  /**
   *
   * @var string $GetExpiringNameListResult
   * @access public
   */
  public $GetExpiringNameListResult = null;

  /**
   *
   * @param string $GetExpiringNameListResult
   * @access public
   */
  public function __construct($GetExpiringNameListResult)
  {
    $this->GetExpiringNameListResult = $GetExpiringNameListResult;
  }

}
