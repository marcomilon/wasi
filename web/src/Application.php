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
    $controller = isset($request[0]) && !empty($request[0]) ? ucwords(array_shift($request)) . 'Controller' : $params['defaultController'];
    $action = isset($request[0]) && !empty($request[0]) ? array_shift($request) : 'index';
    $parameters = $request;

    $response = call_user_func_array([$controller, $action], $parameters);
  }

  public static function getParams() {
    include_once __DIR__ . '/config/web.php';
    return $params;
  }

}
