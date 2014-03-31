<?php

namespace BWC\Component\WWDAPI;

class CheckDomainsResponse
{

  /**
   *
   * @var string $CheckDomainsResult
   * @access public
   */
  public $CheckDomainsResult = null;

  /**
   *
   * @param string $CheckDomainsResult
   * @access public
   */
  public function __construct($CheckDomainsResult)
  {
    $this->CheckDomainsResult = $CheckDomainsResult;
  }

}
