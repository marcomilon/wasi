<?php

namespace Wasi\Web\Controllers;

use Wasi\Framework\Controller;

class BaseController extends Controller {

  public function __construct() {
    $api = \Wasi\Framework\Application::params('api');
    $uri = $api . '/ping';

    $json = file_get_contents($uri);
    
  }

}
