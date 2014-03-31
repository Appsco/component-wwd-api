<?php

namespace BWC\Component\WWDAPI;

class UpdateNameServer
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
   * @var NS[] $nsArray
   * @access public
   */
  public $nsArray = null;

  /**
   *
   * @param string $sCLTRID
   * @param Credential $credential
   * @param Domain[] $domainArray
   * @param NS[] $nsArray
   * @access public
   */
  public function __construct($sCLTRID, $credential, $domainArray, $nsArray)
  {
    $this->sCLTRID = $sCLTRID;
    $this->credential = $credential;
    $this->domainArray = $domainArray;
    $this->nsArray = $nsArray;
  }

}
