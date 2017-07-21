<?php

namespace Wasi\Api;

class RouterWrapper {

  private $router;
  public $model;
  public $uri;

  public function __construct($model, $uri) {

    $this->router = new Router();
    $this->model = $model;
    $this->uri = $uri;

    $this->items();
    $this->read();
    $this->create();
    $this->update();
    $this->delete();
  }

  public function items() {
    $pattern = '/'.$this->uri.'$/';
    $this->router->route('GET', $pattern, function() {
      echo $this->model->items();
    });
  }

  public function read() {
    $pattern = '/'.$this->uri.'\/(.*)$/';
    $this->router->route('GET', $pattern, function($matches) {
      echo $this->model->read($matches);
    });
  }

  public function create() {
    $pattern = '/'.$this->uri.'$/';
    $this->router->route('POST', $pattern, function() {
      $name  = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
      $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_STRING);
      $body = trim(preg_replace('/\s+/S', '', $body));

      $hash = md5($body.time());
      $data = [
        'hash' => $hash,
        'name' => $name,
        'body' => $body
      ];

      echo $this->model->create($hash, $data);
    });
  }

  public function update() {
    $pattern = '/'.$this->uri.'\/(.*)$/';
    $this->router->route('PUT', $pattern, function($matches) {
      parse_str(file_get_contents('php://input'), $_PUT);

      $name  = filter_var($_PUT['name'], FILTER_SANITIZE_STRING);
      $body = filter_var($_PUT['body'], FILTER_SANITIZE_STRING);
      $body = trim(preg_replace('/\s+/S', '', $body));

      $hash = $matches;
      $data = [
        'hash' => $hash,
        'name' => $name,
        'body' => $body
      ];

      echo $this->model->create($hash, $data);
    });
  }

  public function delete() {
    $pattern = '/'.$this->uri.'\/(.*)$/';
    $this->router->route('DELETE', $pattern, function($matches) {
      echo $this->model->delete($matches);
    });
  }

  public function execute() {
    $this->router->execute();
  }

}
