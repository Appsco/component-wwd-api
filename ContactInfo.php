<?php

namespace BWC\Component\WWDAPI;

class ContactInfo {

  /**
   * Contact's first name
   * @var string
   */
  public $fname;

  /**
   * Contact's last name
   * @var string
   */
  public $lname;

  /**
   * Contact's email
   * @var string
   */
  public $email;

  /**
   * Street address
   * Pattern: ^[a-zA-Z0-9 #&'()+,-./:;@[\]]+$
   * @var string
   */
  public $sa1;

  /**
   * City of residence
   * @var string
   */
  public $city;

  /**
   * State or province
   * @var string
   */
  public $sp;

  /**
   * Postal code
   * Pattern: ^[a-zA-Z0-9 #&'()+,-./:;@[\]]+$
   * @var string
   */
  public $pc;

  /**
   * County of residence
   * @var string
   */
  public $cc;

  /**
   * Phone number
   * Format: +[0-9]{1,3}\.[0- 9]{1,12}
   * Example: +1.4805058800
   * @var string
   */
  public $phone;

  public function __construct($fname, $lname, $email, $sa1, $city, $sp, $pc, $cc, $phone) {
    $this->fname  = $fname;
    $this->lname  = $lname;
    $this->email  = $email;
    $this->sa1    = $sa1;
    $this->city   = $city;
    $this->sp     = $sp;
    $this->pc     = $pc;
    $this->cc     = $cc;
    $this->phone  = $phone;
  }

}