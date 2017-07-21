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

  public function items() {
    $json = $this->getJson($this->uri);
    return json_decode($json);
  }

  public function validate() {
    if(empty($this->name) || empty($this->body)) {
      $this->errors[] = "All inputs are required";
      return false;
    } else {
      return true;
    }
  }

  public function create() {

    if(!$this->validate()) {
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

  public function read($hash) {
    $item = json_decode(file_get_contents($this->uri . '/' . $hash));
    return $item;
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
