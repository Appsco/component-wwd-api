<?php

namespace BWC\Component\WWDAPI;

class ModifyDNS
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
   * @var DNSRequest[] $dnsRequestArray
   * @access public
   */
  public $dnsRequestArray = null;

  /**
   *
   * @var string $sDomain
   * @access public
   */
  public $sDomain = null;

  /**
   *
   * @param string $sCLTRID
   * @param Credential $credential
   * @param DNSRequest[] $dnsRequestArray
   * @param string $sDomain
   * @access public
   */
  public function __construct($sCLTRID, $credential, $dnsRequestArray, $sDomain)
  {
    $this->sCLTRID = $sCLTRID;
    $this->credential = $credential;
    $this->dnsRequestArray = $dnsRequestArray;
    $this->sDomain = $sDomain;
  }

}
