<?php

namespace BWC\Component\WWDAPI;

class SetAutoResponder
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
   * @var string $sShopper
   * @access public
   */
  public $sShopper = null;

  /**
   *
   * @var string $sEmailAddress
   * @access public
   */
  public $sEmailAddress = null;

  /**
   *
   * @var int $nAR_Status
   * @access public
   */
  public $nAR_Status = null;

  /**
   *
   * @var string $sAR_Message
   * @access public
   */
  public $sAR_Message = null;

  /**
   *
   * @var string $sAR_Subject
   * @access public
   */
  public $sAR_Subject = null;

  /**
   *
   * @var string $sAR_Start
   * @access public
   */
  public $sAR_Start = null;

  /**
   *
   * @var string $sAR_End
   * @access public
   */
  public $sAR_End = null;

  /**
   *
   * @var string $sAR_From
   * @access public
   */
  public $sAR_From = null;

  /**
   *
   * @param string $sCLTRID
   * @param Credential $credential
   * @param string $sShopper
   * @param string $sEmailAddress
   * @param int $nAR_Status
   * @param string $sAR_Message
   * @param string $sAR_Subject
   * @param string $sAR_Start
   * @param string $sAR_End
   * @param string $sAR_From
   * @access public
   */
  public function __construct($sCLTRID, $credential, $sShopper, $sEmailAddress, $nAR_Status, $sAR_Message, $sAR_Subject, $sAR_Start, $sAR_End, $sAR_From)
  {
    $this->sCLTRID = $sCLTRID;
    $this->credential = $credential;
    $this->sShopper = $sShopper;
    $this->sEmailAddress = $sEmailAddress;
    $this->nAR_Status = $nAR_Status;
    $this->sAR_Message = $sAR_Message;
    $this->sAR_Subject = $sAR_Subject;
    $this->sAR_Start = $sAR_Start;
    $this->sAR_End = $sAR_End;
    $this->sAR_From = $sAR_From;
  }

}
