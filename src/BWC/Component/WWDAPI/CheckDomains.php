<?php

namespace BWC\Component\WWDAPI;

class CheckDomains
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
   * @var CheckDomain[] $domainArray
   * @access public
   */
  public $domainArray = null;

  /**
   *
   * @param string $sCLTRID
   * @param Credential $credential
   * @param CheckDomain[] $domainArray
   * @access public
   */
  public function __construct($sCLTRID, $credential, $domainArray)
  {
    $this->sCLTRID = $sCLTRID;
    $this->credential = $credential;
    $this->domainArray = $domainArray;
  }

}
