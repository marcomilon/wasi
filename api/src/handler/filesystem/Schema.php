<?php

namespace Wasi\Api\Handler\FileSystem;

class Schema extends Data {

  public function __construct() {
    $this->path = __DIR__ . '/storage/schema/';
  }

}
