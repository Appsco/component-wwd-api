<?php

namespace BWC\Component\WWDAPI;

class SetServiceAddOnQty
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
   * @var string $sResourceID
   * @access public
   */
  public $sResourceID = null;

  /**
   *
   * @var int $nProductID
   * @access public
   */
  public $nProductID = null;

  /**
   *
   * @var int $nQuantity
   * @access public
   */
  public $nQuantity = null;

  /**
   *
   * @param string $sCLTRID
   * @param Credential $credential
   * @param string $sResourceID
   * @param int $nProductID
   * @param int $nQuantity
   * @access public
   */
  public function __construct($sCLTRID, $credential, $sResourceID, $nProductID, $nQuantity)
  {
    $this->sCLTRID = $sCLTRID;
    $this->credential = $credential;
    $this->sResourceID = $sResourceID;
    $this->nProductID = $nProductID;
    $this->nQuantity = $nQuantity;
  }

}
