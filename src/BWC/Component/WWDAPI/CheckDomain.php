<?php

namespace BWC\Component\WWDAPI;

class CheckDomain
{

  /**
   *
   * @var string $name
   * @access public
   */
  public $name = null;

  /**
   *
   * @var string $idnScript
   * @access public
   */
  public $idnScript = null;

  /**
   *
   * @param string $name
   * @param string $idnScript
   * @access public
   */
  public function __construct($name, $idnScript)
  {
    $this->name = $name;
    $this->idnScript = $idnScript;
  }

}
