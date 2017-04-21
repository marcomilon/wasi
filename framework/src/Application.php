<?php

namespace Wasi\Framework;

class Application
{

  public function __construct()
  {
    $this->setup();
    $this->route();
  }

  private function setup()
  {
    // do your setup here
  }

  private function route()
  {
    $params = self::getParams();

    $request = [];
    $request = filter_input(INPUT_GET, 'r', FILTER_SANITIZE_STRING);
    $request = explode('/', trim($request, '/'));

    $className = isset($request[0]) && !empty($request[0]) ? ucwords(array_shift($request)) . 'Controller' : $params['defaultController'];
    $methodName = isset($request[0]) && !empty($request[0]) ? array_shift($request) : 'index';

    $controller = '\Wasi\Web\Controllers\\'. $className;

    $parameters = [];
    $r = new \ReflectionMethod($controller, $methodName);
    $params = $r->getParameters();
    foreach ($params as $param) {
      $paramName = $param->getName();

      $paramValue = filter_input(INPUT_GET, $paramName, FILTER_SANITIZE_STRING);
      if(!empty($paramValue)) {
        $parameters[$paramName] = $paramValue;
      } else {
        throw new \Exception('Required parameter missing. (' . $paramName . ')');
      }

    }

    $obj = new $controller;
    $response = call_user_func_array([$obj, $methodName], $parameters);
  }

  public static function getParams() {
    include_once __DIR__ . '/../../web/src/config/web.php';
    return $params;
  }

  public static function params($key) {
    include __DIR__ . '/../../web/src/config/web.php';
    return $params[$key];
  }

}
