<?php

namespace Wasi\Api\Io\FileSystem;

class Schema extends Data {

  public function __construct() {
    $this->path = __DIR__ . '/storage/document/';
  }

}
