<?php

namespace Wasi\Web\Controllers;

use Wasi\Framework\Controller;

class DefaultController extends Controller {

  public function index() {
    echo $this->render('index', [
      'name' => 'Marco'
    ]);
  }

}
