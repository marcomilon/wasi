<?php

namespace Wasi\Web\Models;

class Set extends BaseModel  {

  public function __construct() {
    $api = \Wasi\Framework\Application::params('api');

    if (php_sapi_name() == 'cli-server') {
      $uri = $api . '/set/sets';
    } else {
      $uri = $api . '/sets';
    }

    $this->uri = $uri;
    $this->errors = [];
  }

}
