<?php

namespace BWC\Component\WWDAPI;

class ProcessRequestResponse
{

  /**
   *
   * @var string $ProcessRequestResult
   * @access public
   */
  public $ProcessRequestResult = null;

  /**
   *
   * @param string $ProcessRequestResult
   * @access public
   */
  public function __construct($ProcessRequestResult)
  {
    $this->ProcessRequestResult = $ProcessRequestResult;
  }

}
