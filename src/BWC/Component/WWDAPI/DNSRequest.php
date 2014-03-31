<?php

namespace BWC\Component\WWDAPI;

class DNSRequest
{

  /**
   *
   * @var string $recType
   * @access public
   */
  public $recType = null;

  /**
   *
   * @var string $action
   * @access public
   */
  public $action = null;

  /**
   *
   * @var string $key
   * @access public
   */
  public $key = null;

  /**
   *
   * @var int $ttl
   * @access public
   */
  public $ttl = null;

  /**
   *
   * @var string $recValue
   * @access public
   */
  public $recValue = null;

  /**
   *
   * @param string $recType
   * @param string $action
   * @param string $key
   * @param int $ttl
   * @param string $recValue
   * @access public
   */
  public function __construct($recType, $action, $key, $ttl, $recValue)
  {
    $this->recType = $recType;
    $this->action = $action;
    $this->key = $key;
    $this->ttl = $ttl;
    $this->recValue = $recValue;
  }

}
