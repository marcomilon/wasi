<?php

namespace Wasi\Web\Models;

class Schema  {

  public $name;
  public $body;

  public function items() {
    $uri = $this->getUri();

    return json_decode(file_get_contents($uri));
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

  private function getUri() {
    $api = \Wasi\Framework\Application::params('api');

    if (php_sapi_name() == 'cli-server') {
      $uri = $api . '/schema/schemas';
    } else {
      $uri = $api . '/schemas';
    }

    return $uri;
  }

}
