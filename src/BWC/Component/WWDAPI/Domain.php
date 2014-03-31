<?php

namespace BWC\Component\WWDAPI;

class Domain
{

  /**
   *
   * @var string $resourceid
   * @access public
   */
  public $resourceid = null;

  /**
   *
   * @var string $mngTRID
   * @access public
   */
  public $mngTRID = null;

  /**
   *
   * @var string $transferKey
   * @access public
   */
  public $transferKey = null;

  /**
   *
   * @var string $newAuthInfo
   * @access public
   */
  public $newAuthInfo = null;

  /**
   *
   * @param string $resourceid
   * @param string $mngTRID
   * @param string $transferKey
   * @param string $newAuthInfo
   * @access public
   */
  public function __construct($resourceid, $mngTRID, $transferKey, $newAuthInfo)
  {
    $this->resourceid = $resourceid;
    $this->mngTRID = $mngTRID;
    $this->transferKey = $transferKey;
    $this->newAuthInfo = $newAuthInfo;
  }

}
