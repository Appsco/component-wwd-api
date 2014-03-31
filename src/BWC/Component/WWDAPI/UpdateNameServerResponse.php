<?php

namespace BWC\Component\WWDAPI;

class UpdateNameServerResponse
{

  /**
   *
   * @var string $UpdateNameServerResult
   * @access public
   */
  public $UpdateNameServerResult = null;

  /**
   *
   * @param string $UpdateNameServerResult
   * @access public
   */
  public function __construct($UpdateNameServerResult)
  {
    $this->UpdateNameServerResult = $UpdateNameServerResult;
  }

}
