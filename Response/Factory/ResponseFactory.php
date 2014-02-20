<?php

namespace BWC\Component\WWDAPI\Response\Factory;

class ResponseFactory {

  static public function factory($type, $raw) {
    try {
      $class = implode('', array('\BWC\Component\WWDAPI\Response\\', $type, 'Response'));
      $instance = null;
      if (class_exists($class)) {
        $instance = new $class($raw);
      }
      return $instance;
    } catch (\Exception $ex) {
      throw $ex;
    }
  }

}