<?php

namespace BWC\Component\WWDAPI;

class ModifyDNSResponse
{

  /**
   *
   * @var string $ModifyDNSResult
   * @access public
   */
  public $ModifyDNSResult = null;

  /**
   *
   * @param string $ModifyDNSResult
   * @access public
   */
  public function __construct($ModifyDNSResult)
  {
    $this->ModifyDNSResult = $ModifyDNSResult;
  }

}
