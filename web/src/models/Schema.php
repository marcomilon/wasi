<?php

namespace Wasi\Web\Models;

class Schema extends BaseModel  {

  public function __construct() {
    $api = \Wasi\Framework\Application::params('api');

    if (php_sapi_name() == 'cli-server') {
      $uri = $api . '/schema/schemas';
    } else {
      $uri = $api . '/schemas';
    }

    $this->uri = $uri;
    $this->errors = [];
  }

}
