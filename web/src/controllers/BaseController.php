<?php

namespace Wasi\Web\Controllers;

use Wasi\Framework\Controller;

class BaseController extends Controller {

  public function __construct() {
    $api = \Wasi\Framework\Application::params('api');
    $uri = $api . '/pingds';

    $json = file_get_contents($uri);
    if(empty($json)) {
      //throw new \Exception('Unable to connecto to: ' . $uri);
    }

  }

}
