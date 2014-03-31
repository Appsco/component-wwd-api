<?php

namespace BWC\Component\WWDAPI;

class GetIDNLanguageListResponse
{

  /**
   *
   * @var string $GetIDNLanguageListResult
   * @access public
   */
  public $GetIDNLanguageListResult = null;

  /**
   *
   * @param string $GetIDNLanguageListResult
   * @access public
   */
  public function __construct($GetIDNLanguageListResult)
  {
    $this->GetIDNLanguageListResult = $GetIDNLanguageListResult;
  }

}
