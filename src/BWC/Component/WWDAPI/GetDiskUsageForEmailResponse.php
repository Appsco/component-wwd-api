<?php

namespace BWC\Component\WWDAPI;

class GetDiskUsageForEmailResponse
{

  /**
   *
   * @var string $GetDiskUsageForEmailResult
   * @access public
   */
  public $GetDiskUsageForEmailResult = null;

  /**
   *
   * @param string $GetDiskUsageForEmailResult
   * @access public
   */
  public function __construct($GetDiskUsageForEmailResult)
  {
    $this->GetDiskUsageForEmailResult = $GetDiskUsageForEmailResult;
  }

}
