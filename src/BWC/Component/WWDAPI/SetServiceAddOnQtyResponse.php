<?php

namespace BWC\Component\WWDAPI;

class SetServiceAddOnQtyResponse
{

  /**
   *
   * @var string $SetServiceAddOnQtyResult
   * @access public
   */
  public $SetServiceAddOnQtyResult = null;

  /**
   *
   * @param string $SetServiceAddOnQtyResult
   * @access public
   */
  public function __construct($SetServiceAddOnQtyResult)
  {
    $this->SetServiceAddOnQtyResult = $SetServiceAddOnQtyResult;
  }

}
