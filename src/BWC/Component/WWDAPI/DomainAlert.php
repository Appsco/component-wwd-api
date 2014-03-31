<?php

namespace BWC\Component\WWDAPI;

class DomainAlert
{

  /**
   *
   * @var string $user
   * @access public
   */
  public $user = null;

  /**
   *
   * @var string $domain
   * @access public
   */
  public $domain = null;

  /**
   *
   * @var string $email
   * @access public
   */
  public $email = null;

  /**
   *
   * @var string $tld
   * @access public
   */
  public $tld = null;

  /**
   *
   * @var int $privateReg
   * @access public
   */
  public $privateReg = null;

  /**
   *
   * @var int $backorder
   * @access public
   */
  public $backorder = null;

  /**
   *
   * @param string $user
   * @param string $domain
   * @param string $email
   * @param string $tld
   * @param int $privateReg
   * @param int $backorder
   * @access public
   */
  public function __construct($user, $domain, $email, $tld, $privateReg, $backorder)
  {
    $this->user = $user;
    $this->domain = $domain;
    $this->email = $email;
    $this->tld = $tld;
    $this->privateReg = $privateReg;
    $this->backorder = $backorder;
  }

}
