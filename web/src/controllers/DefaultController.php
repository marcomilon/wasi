<?php

namespace Wasi\Web\Controllers;

use Wasi\Web\Framework\Controller;

class DefaultController extends Controller {

  public function index() {
    echo $this->render('index', [
      'model' => 'sdfsdf'
    ]);
  }

}
