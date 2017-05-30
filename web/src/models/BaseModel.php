<?php

namespace Wasi\Web\Models;

class BaseModel {

  public $uri;
  public $errors;

  public function getJson($uri) {
    $json = file_get_contents($uri);
    if(empty($json)) {
      throw new \Exception('Unable to connecto to: ' . $uri);
    }

    return $json;
  }

}
