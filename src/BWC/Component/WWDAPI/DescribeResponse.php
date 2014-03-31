<?php

namespace BWC\Component\WWDAPI;

class DescribeResponse
{

  /**
   *
   * @var string $DescribeResult
   * @access public
   */
  public $DescribeResult = null;

  /**
   *
   * @param string $DescribeResult
   * @access public
   */
  public function __construct($DescribeResult)
  {
    $this->DescribeResult = $DescribeResult;
  }

}
