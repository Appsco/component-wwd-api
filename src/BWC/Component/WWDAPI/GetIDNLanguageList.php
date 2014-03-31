<?php

namespace BWC\Component\WWDAPI;

class GetIDNLanguageList
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
   * @var string $sTld
   * @access public
   */
  public $sTld = null;

  /**
   *
   * @param string $sCLTRID
   * @param Credential $credential
   * @param string $sTld
   * @access public
   */
  public function __construct($sCLTRID, $credential, $sTld)
  {
    $this->sCLTRID = $sCLTRID;
    $this->credential = $credential;
    $this->sTld = $sTld;
  }

}
