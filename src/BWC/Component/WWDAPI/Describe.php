<?php

namespace BWC\Component\WWDAPI;

class Describe
{

  /**
   *
   * @var string $sCLTRID
   * @access public
   */
  public $sCLTRID = null;

  /**
   *
   * @var Credential $credential
   * @access public
   */
  public $credential = null;

  /**
   *
   * @param string $sCLTRID
   * @param Credential $credential
   * @access public
   */
  public function __construct($sCLTRID, $credential)
  {
    $this->sCLTRID = $sCLTRID;
    $this->credential = $credential;
  }

}
