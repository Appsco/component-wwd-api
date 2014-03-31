<?php

namespace BWC\Component\WWDAPI;

class UpdateDomainMaskingResponse
{

  /**
   *
   * @var string $UpdateDomainMaskingResult
   * @access public
   */
  public $UpdateDomainMaskingResult = null;

  /**
   *
   * @param string $UpdateDomainMaskingResult
   * @access public
   */
  public function __construct($UpdateDomainMaskingResult)
  {
    $this->UpdateDomainMaskingResult = $UpdateDomainMaskingResult;
  }

}
