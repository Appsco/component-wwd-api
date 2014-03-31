<?php

namespace BWC\Component\WWDAPI;

class DomainTransfer
{

  /**
   *
   * @var OrderItem $order
   * @access public
   */
  public $order = null;

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
   * @var string $authInfo
   * @access public
   */
  public $authInfo = null;

  /**
   *
   * @var string $idnScript
   * @access public
   */
  public $idnScript = null;

  /**
   *
   * @param OrderItem $order
   * @param string $sld
   * @param string $tld
   * @param string $authInfo
   * @param string $idnScript
   * @access public
   */
  public function __construct($order, $sld, $tld, $authInfo, $idnScript)
  {
    $this->order = $order;
    $this->sld = $sld;
    $this->tld = $tld;
    $this->authInfo = $authInfo;
    $this->idnScript = $idnScript;
  }

}
