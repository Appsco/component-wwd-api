<?php

namespace BWC\Component\WWDAPI;

class Shopper {

  /**
   * @var string
   */
  public $user;

  /**
   * @var string
   */
  public $pwd;

  /**
   * @var string
   */
  public $email;

  /**
   * @var string
   */
  public $dbpuser;

  /**
   * @var string
   */
  public $dbppwd;

  /**
   * @var string
   */
  public $dbpemail;

  public $acceptOrderTOS = 'agree';

  public function __construct($user, $pwd, $email = null, $fname = null, $lname = null, $phone = null, $dbpuser = null, $dbppwd = null, $dbpemail = null) {
    $this->user = $user;
    $this->email = $email;
    $this->pwd = $pwd;
    $this->pwdhint = $pwd;
    $this->email = $email;
    $this->firstname = $fname;
    $this->lastname = $lname;
    $this->phone = $phone;
    $this->dbpuser = $dbpuser;
    $this->dbppwd = $dbppwd;
    $this->dbpemail = $dbpemail;
  }

}