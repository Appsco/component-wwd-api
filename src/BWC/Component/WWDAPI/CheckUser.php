<?php

namespace BWC\Component\WWDAPI;

class CheckUser
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
   * @var string $sUser
   * @access public
   */
  public $sUser = null;

  /**
   *
   * @var string $sPwd
   * @access public
   */
  public $sPwd = null;

  /**
   *
   * @param string $sCLTRID
   * @param Credential $credential
   * @param string $sType
   * @param string $sUser
   * @param string $sPwd
   * @access public
   */
  public function __construct($sCLTRID, $credential, $sType, $sUser, $sPwd)
  {
    $this->sCLTRID = $sCLTRID;
    $this->credential = $credential;
    $this->sType = $sType;
    $this->sUser = $sUser;
    $this->sPwd = $sPwd;
  }

}
