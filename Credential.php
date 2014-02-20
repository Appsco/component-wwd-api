<?php

namespace BWC\Component\WWDAPI;

class Credential {

  /**
   * @var string
   */
  private $Account;

  /**
   * @var string
   */
  private $Password;

  public function __construct($account, $password) {
    $this->Account = $account;
    $this->Password = $password;
  }

  public function getAccount() {
    return $this->Account;
  }

  public function getPassword() {
    return $this->Password;
  }
}