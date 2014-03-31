<?php

namespace BWC\Component\WWDAPI;

class ManageTransfer
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
   * @var string $sAction
   * @access public
   */
  public $sAction = null;

  /**
   *
   * @param string $sCLTRID
   * @param Credential $credential
   * @param Domain[] $domainArray
   * @param string $sAction
   * @access public
   */
  public function __construct($sCLTRID, $credential, $domainArray, $sAction)
  {
    $this->sCLTRID = $sCLTRID;
    $this->credential = $credential;
    $this->domainArray = $domainArray;
    $this->sAction = $sAction;
  }

}
