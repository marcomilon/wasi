<?php

namespace Wasi\Api\Io\FileSystem;

use Wasi\Api\Io\DataInterface;

class Data implements DataInterface {

  public $path;

  public function create($hash, $data) {
    $filename = $this->path . $hash . '.json';
    $body = json_encode($data);
    return file_put_contents($filename, $body);
  }

  public function read($hash) {
    $filename = $this->path . $hash . '.json';
    if(is_file($filename)) {
      $json = file_get_contents($filename);
      return $json;
    } else {
      header('HTTP/1.0 404 Not Found', true, 404);
      exit();
    }
  }

  public function delete($hash) {
    $filename = $this->path . $hash . '.json';
    if(is_file($filename)) {
      unlink($filename);
    }
  }

  public function items() {
    $pattern = $this->path . '*.json';
    $result = [];
    $items = glob($pattern);

    // usort($items, function($a,$b){
    //   return filemtime($b) - filemtime($a);
    // });

    foreach ($items as $filename) {
      $json = file_get_contents($filename);
      $result[] = $json;
    }

    header('Content-Type: application/json');
    return json_encode($result);
  }

}
