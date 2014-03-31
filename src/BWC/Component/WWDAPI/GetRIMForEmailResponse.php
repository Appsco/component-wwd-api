<?php

namespace BWC\Component\WWDAPI;

class GetRIMForEmailResponse
{

  /**
   *
   * @var string $GetRIMForEmailResult
   * @access public
   */
  public $GetRIMForEmailResult = null;

  /**
   *
   * @param string $GetRIMForEmailResult
   * @access public
   */
  public function __construct($GetRIMForEmailResult)
  {
    $this->GetRIMForEmailResult = $GetRIMForEmailResult;
  }

}
