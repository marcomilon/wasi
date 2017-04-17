<?php

namespace Wasi\Web;

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

    $request = filter_input(INPUT_GET, 'r', FILTER_SANITIZE_STRING);
    $request = explode('/', trim($request, '/'));

    $className = isset($request[0]) && !empty($request[0]) ? ucwords(array_shift($request)) . 'Controller' : $params['defaultController'];
    $methodName = isset($request[0]) && !empty($request[0]) ? array_shift($request) : 'index';
    $parameters = $_GET;

    $controller = __NAMESPACE__ .'\Controllers\\'. $className;

    $r = new \ReflectionMethod($controller, $methodName);
    $params = $r->getParameters();
    foreach ($params as $param) {
        //$param is an instance of ReflectionParameter
        echo $param->getName();
        echo $param->isOptional();
    }
exit();

    $obj = new $controller;
    $response = call_user_func_array([$obj, $methodName], $parameters);
  }

  public static function getParams() {
    include_once __DIR__ . '/config/web.php';
    return $params;
  }

}
