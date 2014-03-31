<?php

namespace BWC\Component\WWDAPI;

class OrderDomainPrivacyResponse
{

  /**
   *
   * @var string $OrderDomainPrivacyResult
   * @access public
   */
  public $OrderDomainPrivacyResult = null;

  /**
   *
   * @param string $OrderDomainPrivacyResult
   * @access public
   */
  public function __construct($OrderDomainPrivacyResult)
  {
    $this->OrderDomainPrivacyResult = $OrderDomainPrivacyResult;
  }

}
