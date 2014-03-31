<?php

namespace BWC\Component\WWDAPI;

class GetUnicodeIDNResponse
{

  /**
   *
   * @var string $GetUnicodeIDNResult
   * @access public
   */
  public $GetUnicodeIDNResult = null;

  /**
   *
   * @param string $GetUnicodeIDNResult
   * @access public
   */
  public function __construct($GetUnicodeIDNResult)
  {
    $this->GetUnicodeIDNResult = $GetUnicodeIDNResult;
  }

}
