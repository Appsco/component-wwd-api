<?php

namespace BWC\Component\WWDAPI;

class RemoveEmailAddressResponse
{

  /**
   *
   * @var string $RemoveEmailAddressResult
   * @access public
   */
  public $RemoveEmailAddressResult = null;

  /**
   *
   * @param string $RemoveEmailAddressResult
   * @access public
   */
  public function __construct($RemoveEmailAddressResult)
  {
    $this->RemoveEmailAddressResult = $RemoveEmailAddressResult;
  }

}
