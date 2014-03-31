<?php

namespace BWC\Component\WWDAPI;

class GetEmailAddressesForDomainResponse
{

  /**
   *
   * @var string $GetEmailAddressesForDomainResult
   * @access public
   */
  public $GetEmailAddressesForDomainResult = null;

  /**
   *
   * @param string $GetEmailAddressesForDomainResult
   * @access public
   */
  public function __construct($GetEmailAddressesForDomainResult)
  {
    $this->GetEmailAddressesForDomainResult = $GetEmailAddressesForDomainResult;
  }

}
