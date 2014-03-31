<?php

namespace BWC\Component\WWDAPI;

class GetIMAPForEmailResponse
{

  /**
   *
   * @var string $GetIMAPForEmailResult
   * @access public
   */
  public $GetIMAPForEmailResult = null;

  /**
   *
   * @param string $GetIMAPForEmailResult
   * @access public
   */
  public function __construct($GetIMAPForEmailResult)
  {
    $this->GetIMAPForEmailResult = $GetIMAPForEmailResult;
  }

}
