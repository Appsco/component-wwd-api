<?php

namespace BWC\Component\WWDAPI;

class ShopperNoDBP
{

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
   * @param string $user
   * @param string $pwd
   * @param string $pwdhint
   * @param string $email
   * @param string $firstname
   * @param string $lastname
   * @param string $phone
   * @param string $pin
   * @access public
   */
  public function __construct($user, $pwd, $pwdhint, $email, $firstname, $lastname, $phone, $pin)
  {
    $this->user = $user;
    $this->pwd = $pwd;
    $this->pwdhint = $pwdhint;
    $this->email = $email;
    $this->firstname = $firstname;
    $this->lastname = $lastname;
    $this->phone = $phone;
    $this->pin = $pin;
  }

}
