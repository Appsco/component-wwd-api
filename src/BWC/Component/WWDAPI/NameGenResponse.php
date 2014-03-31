<?php

namespace BWC\Component\WWDAPI;

class NameGenResponse
{

  /**
   *
   * @var string $NameGenResult
   * @access public
   */
  public $NameGenResult = null;

  /**
   *
   * @param string $NameGenResult
   * @access public
   */
  public function __construct($NameGenResult)
  {
    $this->NameGenResult = $NameGenResult;
  }

}
