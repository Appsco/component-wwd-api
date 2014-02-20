<?php

namespace BWC\Component\WWDAPI;

interface WWDAPIInterface {

  public function describe();

  public function check(array $domains, array $hostNames, array $nameServers);

  public function info($resourceId = null);

  public function order(Shopper $shopper, array $items, array $dbp = array());

  public function privacy(Shopper $shopper, array $dbp = array());

  public function renew(Shopper $shopper, array $items);

  public function transfer(Shopper $shopper, array $items);
}