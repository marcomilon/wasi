<?php

namespace Wasi\Web\Models;

class Schema extends BaseModel  {

  public $name;
  public $body;

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

  public function items() {
    $json = $this->getJson($this->uri);
    return json_decode($json);
  }

  public function create() {

    if(empty($this->name) || empty($this->body)) {
      $this->errors[] = "All inputs are required";
      return false;
    }

    $params = [
      'name' => $this->name,
      'body' => $this->body
    ];

    $query = http_build_query($params);

    $contextData = [
      'method' => 'POST',
      'header' => "Connection: close\r\n".
      "Content-Length: ".strlen($query)."\r\n".
      "Content-Type: application/x-www-form-urlencoded\r\n",
      'content'=> $query
    ];

    $context = stream_context_create(['http' => $contextData]);

    $result = file_get_contents($this->uri, false, $context);

    if($result > 0) {
      return true;
    } else {
      return false;
    }

  }

  public function update($hash) {

    if(empty($this->name) || empty($this->body)) {
      $this->errors[] = "All inputs are required";
      return false;
    }

    $params = [
      'name' => $this->name,
      'body' => $this->body
    ];

    $query = http_build_query($params);

    $contextData = [
      'method' => 'PUT',
      'header' => "Connection: close\r\n".
      "Content-Length: ".strlen($query)."\r\n".
      "Content-Type: application/x-www-form-urlencoded\r\n",
      'content'=> $query
    ];

    $context = stream_context_create(['http' => $contextData]);

    $result = file_get_contents($this->uri . '/' . $hash, false, $context);

    if($result > 0) {
      return true;
    } else {
      return false;
    }

  }

  public function read($hash) {
    $item = json_decode(file_get_contents($this->uri . '/' . $hash));
    return $item;
  }

  public function delete($hash) {
    $contextData = [
      'method' => 'DELETE',
      'header' => "Connection: close\r\n"
    ];

    $context = stream_context_create(['http' => $contextData]);

    $result = file_get_contents($this->uri . '/'.$hash, false, $context);

    if($result > 0) {
      return true;
    } else {
      return false;
    }
  }

}
