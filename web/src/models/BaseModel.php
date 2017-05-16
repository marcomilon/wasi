<?php

namespace Wasi\Web\Models;

class BaseModel {

  public $uri;
  public $errors;

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

  public function getJson($uri) {
    $json = file_get_contents($uri);
    if(empty($json)) {
      throw new \Exception('Unable to connecto to: ' . $uri);
    }
  }

}
