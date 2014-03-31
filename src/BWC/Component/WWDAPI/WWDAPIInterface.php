<?php

namespace BWC\Component\WWDAPI;

interface WWDAPIInterface {

  public function describe();

  // checkAvailability previous check
  public function checkAvailability(array $domains, array $hostNames, array $nameServers);

  public function info($resourceId = null);

  // orderDomains previous order
  public function orderDomains(Shopper $shopper, array $items, array $dbp = array());

  // orderDomainPrivacy previouis privacy
  public function orderDomainPrivacy(Shopper $shopper, array $dbp = array());

  // orderDomainRenewals previous renew
  public function orderDomainRenewals(Shopper $shopper, array $items);

  // orderDomainTransfers previous transfer
  public function orderDomainTransfer(Shopper $shopper, array $items);
}