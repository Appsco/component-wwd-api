<?php

namespace BWC\Component\WWDAPI;

class Shopper
{

  /**
   *
   * @var string $acceptOrderTOS
   * @access public
   */
  public $acceptOrderTOS = null;

  /**
   *
   * @var string $user
   * @access public
   */
  public $user = null;

  /**
   *
   * @var string $pwd
   * @access public
   */
  public $pwd = null;

  /**
   *
   * @var string $pwdhint
   * @access public
   */
  public $pwdhint = null;

  /**
   *
   * @var string $email
   * @access public
   */
  public $email = null;

  /**
   *
   * @var string $firstname
   * @access public
   */
  public $firstname = null;

  /**
   *
   * @var string $lastname
   * @access public
   */
  public $lastname = null;

  /**
   *
   * @var string $phone
   * @access public
   */
  public $phone = null;

  /**
   *
   * @var string $pin
   * @access public
   */
  public $pin = null;

  /**
   *
   * @var string $dbpuser
   * @access public
   */
  public $dbpuser = null;

  /**
   *
   * @var string $dbppwd
   * @access public
   */
  public $dbppwd = null;

  /**
   *
   * @var string $dbppwdhint
   * @access public
   */
  public $dbppwdhint = null;

  /**
   *
   * @var string $dbpemail
   * @access public
   */
  public $dbpemail = null;

  /**
   *
   * @var string $dbppin
   * @access public
   */
  public $dbppin = null;

  /**
   *
   * @param string $acceptOrderTOS
   * @param string $user
   * @param string $pwd
   * @param string $pwdhint
   * @param string $email
   * @param string $firstname
   * @param string $lastname
   * @param string $phone
   * @param string $pin
   * @param string $dbpuser
   * @param string $dbppwd
   * @param string $dbppwdhint
   * @param string $dbpemail
   * @param string $dbppin
   * @access public
   */
  public function __construct($acceptOrderTOS, $user, $pwd, $pwdhint = null, $email = null, $firstname = null,
      $lastname = null, $phone = null, $pin = null, $dbpuser = null, $dbppwd = null, $dbppwdhint = null,
      $dbpemail = null, $dbppin = null)
  {
    $this->acceptOrderTOS = $acceptOrderTOS;
    $this->user = $user;
    $this->pwd = $pwd;
    $this->pwdhint = $pwdhint;
    $this->email = $email;
    $this->firstname = $firstname;
    $this->lastname = $lastname;
    $this->phone = $phone;
    $this->pin = $pin;
    $this->dbpuser = $dbpuser;
    $this->dbppwd = $dbppwd;
    $this->dbppwdhint = $dbppwdhint;
    $this->dbpemail = $dbpemail;
    $this->dbppin = $dbppin;
  }

}
