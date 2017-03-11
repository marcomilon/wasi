<?php


namespace Wasi\Api\Handler\FileSystem;

use Wasi\Api\Handler\ContentInterface;

class Content implements ContentInterface {

  public function items($hash) {
    $pattern = __DIR__ . '/storage/data/*.json';
    $result = [];
    foreach (glob($pattern) as $filename) {
      $json = file_get_contents($filename);
      $result[] = $json;
    }

    header('Content-Type: application/json');
    return json_encode($result);
  }

}
