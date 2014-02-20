<?php

namespace BWC\Component\WWDAPI\Response;

interface ResponseInterface {

  public function isValid();

  public function getMessage();

  public function getResultData();

}