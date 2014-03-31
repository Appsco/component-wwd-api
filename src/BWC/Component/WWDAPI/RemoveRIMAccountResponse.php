<?php

namespace BWC\Component\WWDAPI;

class RemoveRIMAccountResponse
{

  /**
   *
   * @var string $RemoveRIMAccountResult
   * @access public
   */
  public $RemoveRIMAccountResult = null;

  /**
   *
   * @param string $RemoveRIMAccountResult
   * @access public
   */
  public function __construct($RemoveRIMAccountResult)
  {
    $this->RemoveRIMAccountResult = $RemoveRIMAccountResult;
  }

}
