<?php

namespace BWC\Component\WWDAPI;

class SetDomainLocking
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
   * @var Domain[] $domainArray
   * @access public
   */
  public $domainArray = null;

  /**
   *
   * @var string $sLock
   * @access public
   */
  public $sLock = null;

  /**
   *
   * @param string $sCLTRID
   * @param Credential $credential
   * @param Domain[] $domainArray
   * @param string $sLock
   * @access public
   */
  public function __construct($sCLTRID, $credential, $domainArray, $sLock)
  {
    $this->sCLTRID = $sCLTRID;
    $this->credential = $credential;
    $this->domainArray = $domainArray;
    $this->sLock = $sLock;
  }

}
