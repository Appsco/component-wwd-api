<?php

namespace BWC\Component\WWDAPI;

class DomainData
{

  /**
   *
   * @var string $sld
   * @access public
   */
  public $sld = null;

  /**
   *
   * @var string $tld
   * @access public
   */
  public $tld = null;

  /**
   *
   * @var int $period
   * @access public
   */
  public $period = null;

  /**
   *
   * @param string $sld
   * @param string $tld
   * @param int $period
   * @access public
   */
  public function __construct($sld, $tld, $period)
  {
    $this->sld = $sld;
    $this->tld = $tld;
    $this->period = $period;
  }

}
