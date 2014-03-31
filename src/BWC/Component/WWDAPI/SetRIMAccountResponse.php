<?php

namespace BWC\Component\WWDAPI;

class SetRIMAccountResponse
{

  /**
   *
   * @var string $SetRIMAccountResult
   * @access public
   */
  public $SetRIMAccountResult = null;

  /**
   *
   * @param string $SetRIMAccountResult
   * @access public
   */
  public function __construct($SetRIMAccountResult)
  {
    $this->SetRIMAccountResult = $SetRIMAccountResult;
  }

}
