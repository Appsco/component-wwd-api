<?php

namespace BWC\Component\WWDAPI;

class TestEmailPasswordResponse
{

  /**
   *
   * @var string $TestEmailPasswordResult
   * @access public
   */
  public $TestEmailPasswordResult = null;

  /**
   *
   * @param string $TestEmailPasswordResult
   * @access public
   */
  public function __construct($TestEmailPasswordResult)
  {
    $this->TestEmailPasswordResult = $TestEmailPasswordResult;
  }

}
