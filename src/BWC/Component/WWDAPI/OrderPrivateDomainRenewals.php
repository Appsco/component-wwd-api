<?php

namespace BWC\Component\WWDAPI;

class OrderPrivateDomainRenewals
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
   * @var Shopper $shopper
   * @access public
   */
  public $shopper = null;

  /**
   *
   * @var DomainRenewal[] $items
   * @access public
   */
  public $items = null;

  /**
   *
   * @var ResourceRenewal[] $dbpItems
   * @access public
   */
  public $dbpItems = null;

  /**
   *
   * @var string $sROID
   * @access public
   */
  public $sROID = null;

  /**
   *
   * @param string $sCLTRID
   * @param Credential $credential
   * @param Shopper $shopper
   * @param DomainRenewal[] $items
   * @param ResourceRenewal[] $dbpItems
   * @param string $sROID
   * @access public
   */
  public function __construct($sCLTRID, $credential, $shopper, $items, $dbpItems, $sROID)
  {
    $this->sCLTRID = $sCLTRID;
    $this->credential = $credential;
    $this->shopper = $shopper;
    $this->items = $items;
    $this->dbpItems = $dbpItems;
    $this->sROID = $sROID;
  }

}
