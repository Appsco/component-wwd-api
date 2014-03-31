<?php

namespace BWC\Component\WWDAPI;

class ResetPassword
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
   * @var string $sEmail
   * @access public
   */
  public $sEmail = null;

  /**
   *
   * @var string $sPwdHint
   * @access public
   */
  public $sPwdHint = null;

  /**
   *
   * @param string $sCLTRID
   * @param Credential $credential
   * @param string $sUser
   * @param string $sPwd
   * @param string $sEmail
   * @param string $sPwdHint
   * @access public
   */
  public function __construct($sCLTRID, $credential, $sUser, $sPwd, $sEmail, $sPwdHint)
  {
    $this->sCLTRID = $sCLTRID;
    $this->credential = $credential;
    $this->sUser = $sUser;
    $this->sPwd = $sPwd;
    $this->sEmail = $sEmail;
    $this->sPwdHint = $sPwdHint;
  }

}
