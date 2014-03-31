<?php

namespace BWC\Component\WWDAPI;

class GetUnicodeIDN
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
   * @var String[] $sDomainArray
   * @access public
   */
  public $sDomainArray = null;

  /**
   *
   * @param string $sCLTRID
   * @param Credential $credential
   * @param String[] $sDomainArray
   * @access public
   */
  public function __construct($sCLTRID, $credential, $sDomainArray)
  {
    $this->sCLTRID = $sCLTRID;
    $this->credential = $credential;
    $this->sDomainArray = $sDomainArray;
  }

}
