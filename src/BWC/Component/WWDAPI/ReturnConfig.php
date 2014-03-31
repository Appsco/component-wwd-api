<?php

namespace BWC\Component\WWDAPI;

class ReturnConfig
{

  /**
   *
   * @var int $pageNumber
   * @access public
   */
  public $pageNumber = null;

  /**
   *
   * @var int $resultsPerPage
   * @access public
   */
  public $resultsPerPage = null;

  /**
   *
   * @var string $orderBy
   * @access public
   */
  public $orderBy = null;

  /**
   *
   * @var string $sortOrder
   * @access public
   */
  public $sortOrder = null;

  /**
   *
   * @param int $pageNumber
   * @param int $resultsPerPage
   * @param string $orderBy
   * @param string $sortOrder
   * @access public
   */
  public function __construct($pageNumber, $resultsPerPage, $orderBy, $sortOrder)
  {
    $this->pageNumber = $pageNumber;
    $this->resultsPerPage = $resultsPerPage;
    $this->orderBy = $orderBy;
    $this->sortOrder = $sortOrder;
  }

}
