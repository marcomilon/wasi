<?php

namespace Wasi\Web\Models;

class Document extends BaseModel  {

  public function __construct() {
    $api = \Wasi\Framework\Application::params('api');

    if (php_sapi_name() == 'cli-server') {
      $uri = $api . '/document/documents';
    } else {
      $uri = $api . '/documents';
    }

    $this->uri = $uri;
    $this->errors = [];
  }

}
