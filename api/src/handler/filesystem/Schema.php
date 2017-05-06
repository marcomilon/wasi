<?php

namespace Wasi\Api\Handler\FileSystem;

use Wasi\Api\Handler\SchemaInterface;

class Schema implements SchemaInterface {

  public function create($hash, $data) {
    $filename = __DIR__ . '/storage/schema/'. $hash . '.json';
    $body = json_encode($data);
    return file_put_contents($filename, $body);
  }

  public function read($hash) {
    $filename = __DIR__ . '/storage/schema/'. $hash . '.json';
    $json = file_get_contents($filename);
    return $json;
  }

  public function delete($hash) {
    $filename = __DIR__ . '/storage/schema/'. $hash . '.json';
    if(is_file($filename)) {
      unlink($filename);
    }
  }

  public function items() {
    $pattern = __DIR__ . '/storage/schema/*.json';
    $result = [];
    $items = glob($pattern);

    usort($items, function($a,$b){
      return filemtime($a) - filemtime($b);
    });

    foreach ($items as $filename) {
      $json = file_get_contents($filename);
      $result[] = $json;
    }

    header('Content-Type: application/json');
    return json_encode($result);
  }

}
