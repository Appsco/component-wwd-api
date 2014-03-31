<?php

namespace BWC\Component\WWDAPI;

class ManageTransferResponse
{

  /**
   *
   * @var string $ManageTransferResult
   * @access public
   */
  public $ManageTransferResult = null;

  /**
   *
   * @param string $ManageTransferResult
   * @access public
   */
  public function __construct($ManageTransferResult)
  {
    $this->ManageTransferResult = $ManageTransferResult;
  }

}
