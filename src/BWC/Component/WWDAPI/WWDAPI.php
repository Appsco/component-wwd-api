<?php

namespace BWC\Component\WWDAPI;

use BWC\Component\WWDAPI\Response\Factory\ResponseFactory;

class WWDAPI implements WWDAPIInterface {

  private static $wsdl = 'https://api.ote.wildwestdomains.com/wswwdapi/wapi.asmx?wsdl';

  /**
   * @var \SoapClient
   */
  private $_soapClient;

  /**
   * @var Credential
   */
  private $_credential;

  /**
   * Client transaction ID
   * @var string
   */
  private $_cltrid;

  protected function call($method, array $params) {
    if (!empty($this->_soapClient) && $this->_soapClient instanceof \SoapClient) {
      if (is_callable(array($this->_soapClient, $method))) {
        $rawResponse = call_user_func_array(array($this->_soapClient, $method), array($params));
        return ResponseFactory::factory($method, $rawResponse);
      } else {
        throw new \Exception(sprintf("Invalid call. Method [%s()]", $method));
      }
    } else {
      throw new \Exception(sprintf("Method %s() is not callable.", $method));
    }
  }

  public function resetCertification() {
    $xml = '<wapi clTRID="%s" account="%s" pwd="%s">' .
      '<manage><script cmd="reset" /></manage>' .
      '</wapi>';
    $xml = sprintf($xml, htmlentities($this->_cltrid), htmlentities($this->_credential->getAccount()), htmlentities($this->_credential->getPassword()));
    $data = array('sRequestXML' => $xml);
    $response = $this->_soapClient->ProcessRequest($data);
    return $response;
  }

  public function __construct(Credential $credential, $wsdl = null) {
    if (empty($wsdl)) {
      $wsdl = self::$wsdl;
    }
    $this->setSoapClient($wsdl);
    $this->setCredential($credential);
    $this->setClTrId();
  }

  public function setSoapClient($wsdl) {
    if (is_string($wsdl)) {
      $this->_soapClient = new \SoapClient($wsdl);
    }
  }
  public function setCredential(Credential $credential) {
    $this->_credential = $credential;
  }
  public function setClTrId() {
    $this->_cltrid = uniqid();
  }

  /**
   * Returns activity timeout and version information form the server
   *
   * @return \BWC\Component\WWDAPI\Response\DescribeResponse
   */
  public function describe() {
    return $this->call('Describe', array(
      'sCLTRID'        => $this->_cltrid,
      'credential'     => $this->_credential
    ));
  }

  /**
   * Verify the availability of domain names, name servers and hosts.
   *
   * @param array $domains Domain names to check
   * @param array $hostNames Host names to check
   * @param array $nameServers Name servers to check
   * @return \BWC\Component\WWDAPI\Response\CheckAvailabilityResponse
   */
  public function checkAvailability(array $domains, array $hostNames, array $nameServers) {
    return $this->call('CheckAvailability', array(
      'sCLTRID'        => $this->_cltrid,
      'credential'     => $this->_credential,
      'sDomainArray'   => $domains,
      'sHostArray'     => $hostNames,
      'sNSArray'       => $nameServers
    ));
  }


  /**
   * Get information about items that have been previously ordered.
   * @param string $resourceId
   * @return \BWC\Component\WWDAPI\Response\InfoResponse
   */
  public function info($resourceId = null) {
    return $this->call('Info', array(
      'sCLTRID'     => $this->_cltrid,
      'credential'  => $this->_credential,
      'sResourceID' => $resourceId,
    ));
  }

  /**
   * Submit a domain purchases to the API.
   *
   * @param Shopper $shopper Domain names to check
   * @param array $items Array of DomainRegistration objects
   * @param array $dbp Array of DomainByProxy objects. Domains that are registered via proxy
   * @return \BWC\Component\WWDAPI\Response\OrderDomainsResponse
   */
  public function orderDomains(Shopper $shopper, array $items, array $dbp = array()) {
    return $this->call('OrderDomains', array(
      'sCLTRID'      => $this->_cltrid,
      'credential'   => $this->_credential,
      'shopper'      => $shopper,
      'items'        => $items,
      'dbpItems'     => $dbp
    ));
  }

  /**
   * Add privacy to an existing domain name res- gistration.
   *
   * @param Shopper $shopper
   * @param array $dbp
   * @return null
   */
  public function orderDomainPrivacy(Shopper $shopper, array $dbp = array()) {
    return $this->call('OrderDomainPrivacy', array(
      'sCLTRID'      => $this->_cltrid,
      'credential'   => $this->_credential,
      'shopper'      => $shopper,
      'items'        => $dbp
    ));
  }

  /**
   * Retrieves status notifications for pending orders.
   *
   * @return \BWC\Component\WWDAPI\Response\PollResponse
   */
  public function poll() {
    return $this->call('Poll', array(
      'sCLTRID'      => $this->_cltrid,
      'credential'   => $this->_credential,
    ));
  }

  /**
   * Renews registration for an existing domain name.
   *
   * @param Shopper $shopper
   * @param array $items
   * @param array $dbp
   * @return null
   */
  public function orderDomainRenewals(Shopper $shopper, array $items, array $dbp = array()) {
    return $this->call('OrderPrivateDomainRenewals', array(
      'sCLTRID'      => $this->_cltrid,
      'credential'   => $this->_credential,
      'shopper'      => $shopper,
      'items'        => $items,
      'dbpItems'     => $dbp
    ));
  }

  public function orderDomainTransfer(Shopper $shopper, array $items) {
    return $this->call('OrderDomainTransfers', array(
      'sCLTRID'      => $this->_cltrid,
      'credential'   => $this->_credential,
      'shopper'      => $shopper,
      'items'        => $items,
    ));
  }

  public function alternatives($domain, $excludeTaken = true, $prefix = false, $suffix = false,
                               $dashes = false, $related = false, $split = false, $baseOnTop = true,
                               $maxResults = 25) {
    return $this->call('NameGenDB', array(
      'sCLTRID'       => $this->_cltrid,
      'credential'    => $this->_credential,
      'sKey'          => $domain,
      'bExcludeTaken' => $excludeTaken,
      'nMaxResults'   => $maxResults,
      'bAddPrefix'    => $prefix,
      'bAddSuffix'    => $suffix,
      'bAddDashes'    => $dashes,
      'bAddRelated'   => $related,
      'bAdvancedSplit'=> $split,
      'bBaseOnTop'    => $baseOnTop,
    ));
  }

}