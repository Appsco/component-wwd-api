<?php

namespace BWC\Component\WWDAPI;

class OrderDomains
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
   * @var DomainRegistration[] $items
   * @access public
   */
  public $items = null;

  /**
   *
   * @var DomainByProxy[] $dbpItems
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
   * @param DomainRegistration[] $items
   * @param DomainByProxy[] $dbpItems
   * @param string $sROID
   * @access public
   */
  public function __construct($sCLTRID, $credential, $shopper, array $items = array(), array $dbpItems = null, $sROID = "1")
  {
    $this->sCLTRID = $sCLTRID;
    $this->credential = $credential;
    $this->shopper = $shopper;
    $this->items = $items;
    $this->dbpItems = $dbpItems;
    $this->sROID = $sROID;
  }

}
