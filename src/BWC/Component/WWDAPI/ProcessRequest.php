<?php

namespace BWC\Component\WWDAPI;

class ProcessRequest
{

  /**
   *
   * @var string $sRequestXML
   * @access public
   */
  public $sRequestXML = null;

  /**
   *
   * @param string $sRequestXML
   * @access public
   */
  public function __construct($sRequestXML)
  {
    $this->sRequestXML = $sRequestXML;
  }

}
