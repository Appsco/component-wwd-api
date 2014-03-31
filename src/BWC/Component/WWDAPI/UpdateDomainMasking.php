<?php

namespace BWC\Component\WWDAPI;

class UpdateDomainMasking
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
   * @var string $sForwardingURL
   * @access public
   */
  public $sForwardingURL = null;

  /**
   *
   * @var string $sMaskingMetatagTitle
   * @access public
   */
  public $sMaskingMetatagTitle = null;

  /**
   *
   * @var string $sMaskingMetatagDesc
   * @access public
   */
  public $sMaskingMetatagDesc = null;

  /**
   *
   * @var string $sMaskingMetatagKeyword
   * @access public
   */
  public $sMaskingMetatagKeyword = null;

  /**
   *
   * @param string $sCLTRID
   * @param Credential $credential
   * @param Domain[] $domainArray
   * @param string $sAction
   * @param string $sForwardingURL
   * @param string $sMaskingMetatagTitle
   * @param string $sMaskingMetatagDesc
   * @param string $sMaskingMetatagKeyword
   * @access public
   */
  public function __construct($sCLTRID, $credential, $domainArray, $sAction, $sForwardingURL, $sMaskingMetatagTitle, $sMaskingMetatagDesc, $sMaskingMetatagKeyword)
  {
    $this->sCLTRID = $sCLTRID;
    $this->credential = $credential;
    $this->domainArray = $domainArray;
    $this->sAction = $sAction;
    $this->sForwardingURL = $sForwardingURL;
    $this->sMaskingMetatagTitle = $sMaskingMetatagTitle;
    $this->sMaskingMetatagDesc = $sMaskingMetatagDesc;
    $this->sMaskingMetatagKeyword = $sMaskingMetatagKeyword;
  }

}
