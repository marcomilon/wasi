<?php

namespace Wasi\Web\Models;

class Schema extends BaseModel  {

  public $name;
  public $body;

  public function items() {
    try {
      $json = $this->getJson($this->uri);
    } catch (\Exception $e) {
      $this->errors[] = $e->getMessage();
    }

    return json_decode($json);
  }

  public function create() {

    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_STRING);

    $params = [
      'name' => $name,
      'body' => $body
    ];

    $query = http_build_query($params);

    $contextData = [
      'method' => 'POST',
      'header' => "Connection: close\r\n".
      "Content-Length: ".strlen($query)."\r\n",
      'content'=> $query
    ];

    $context = stream_context_create(['http' => $contextData]);

    $uri = $this->getUri();
    $result = file_get_contents($uri, false, $context);

    if($result > 0) {
      return true;
    } else {
      return false;
    }

  }

  public function read($hash) {
    $hash = filter_input(INPUT_GET, 'hash', FILTER_SANITIZE_STRING);

    $uri = $this->getUri();
    $item = json_decode(file_get_contents($uri . '/'.$hash));

    return $item;
  }

  public function delete($hash) {
    $hash = filter_input(INPUT_GET, 'hash', FILTER_SANITIZE_STRING);

    $contextData = [
      'method' => 'DELETE',
      'header' => "Connection: close\r\n"
    ];

    $context = stream_context_create(['http' => $contextData]);

    $uri = $this->getUri();

    $result = file_get_contents($uri . '/'.$hash, false, $context);

    if($result > 0) {
      return true;
    } else {
      return false;
    }
  }

}
