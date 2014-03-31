<?php

namespace BWC\Component\WWDAPI;

class Cancel
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
   * @var string $sType
   * @access public
   */
  public $sType = null;

  /**
   *
   * @var String[] $sIDArray
   * @access public
   */
  public $sIDArray = null;

  /**
   *
   * @param string $sCLTRID
   * @param Credential $credential
   * @param string $sType
   * @param String[] $sIDArray
   * @access public
   */
  public function __construct($sCLTRID, $credential, $sType, $sIDArray)
  {
    $this->sCLTRID = $sCLTRID;
    $this->credential = $credential;
    $this->sType = $sType;
    $this->sIDArray = $sIDArray;
  }

}
