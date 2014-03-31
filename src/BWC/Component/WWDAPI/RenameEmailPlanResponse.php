<?php

namespace BWC\Component\WWDAPI;

class RenameEmailPlanResponse
{

  /**
   *
   * @var string $RenameEmailPlanResult
   * @access public
   */
  public $RenameEmailPlanResult = null;

  /**
   *
   * @param string $RenameEmailPlanResult
   * @access public
   */
  public function __construct($RenameEmailPlanResult)
  {
    $this->RenameEmailPlanResult = $RenameEmailPlanResult;
  }

}
