<?php

namespace Wasi\Api;

class Router
{

  private $routes = [];

  public function route($method, $pattern, $callback) {
    $this->routes[] = [
      'method' => $method,
      'pattern' => $pattern,
      'callback' => $callback
    ];
  }

  public function execute() {

    $method = $_SERVER['REQUEST_METHOD'];
    $uri = $_SERVER['REQUEST_URI'];

    foreach ($this->routes as $route) {
      if ($method == $route['method'] && preg_match($route['pattern'], $uri, $params) === 1) {
        array_shift($params);
        return call_user_func_array($route['callback'], array_values($params));
      }
    }

    $this->notFound();
  }

  public function notFound() {
    header("HTTP/1.0 404 Not Found");
    exit();
  }

}
