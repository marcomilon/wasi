<?php

namespace Wasi\Api\Io\FileSystem;

class Document extends Data {

  public function __construct() {
    $this->path = __DIR__ . '/storage/document/';
  }

}
