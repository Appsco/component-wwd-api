<?php

namespace BWC\Component\WWDAPI;

class Poll
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
   * @var string $sOp
   * @access public
   */
  public $sOp = null;

  /**
   *
   * @param string $sCLTRID
   * @param Credential $credential
   * @param string $sOp
   * @access public
   */
  public function __construct($sCLTRID, $credential, $sOp)
  {
    $this->sCLTRID = $sCLTRID;
    $this->credential = $credential;
    $this->sOp = $sOp;
  }

}
