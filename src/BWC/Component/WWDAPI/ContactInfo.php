<?php

namespace BWC\Component\WWDAPI;

class ContactInfo
{

  /**
   *
   * @var string $fname
   * @access public
   */
  public $fname = null;

  /**
   *
   * @var string $lname
   * @access public
   */
  public $lname = null;

  /**
   *
   * @var string $org
   * @access public
   */
  public $org = null;

  /**
   *
   * @var string $email
   * @access public
   */
  public $email = null;

  /**
   *
   * @var string $sa1
   * @access public
   */
  public $sa1 = null;

  /**
   *
   * @var string $sa2
   * @access public
   */
  public $sa2 = null;

  /**
   *
   * @var string $city
   * @access public
   */
  public $city = null;

  /**
   *
   * @var string $sp
   * @access public
   */
  public $sp = null;

  /**
   *
   * @var string $pc
   * @access public
   */
  public $pc = null;

  /**
   *
   * @var string $cc
   * @access public
   */
  public $cc = null;

  /**
   *
   * @var string $phone
   * @access public
   */
  public $phone = null;

  /**
   *
   * @var string $fax
   * @access public
   */
  public $fax = null;

  /**
   *
   * @param string $fname
   * @param string $lname
   * @param string $org
   * @param string $email
   * @param string $sa1
   * @param string $sa2
   * @param string $city
   * @param string $sp
   * @param string $pc
   * @param string $cc
   * @param string $phone
   * @param string $fax
   * @access public
   */
  public function __construct($fname, $lname, $email, $sa1, $city, $sp, $pc, $cc, $phone, $fax = null, $org = null, $sa2 = null)
  {
    $this->fname = $fname;
    $this->lname = $lname;
    $this->org = $org;
    $this->email = $email;
    $this->sa1 = $sa1;
    $this->sa2 = $sa2;
    $this->city = $city;
    $this->sp = $sp;
    $this->pc = $pc;
    $this->cc = $cc;
    $this->phone = $phone;
    $this->fax = $fax;
  }

}
