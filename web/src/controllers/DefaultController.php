<?php

namespace Wasi\Web\Controllers;

use Wasi\Web\Controllers\BaseController;

class DefaultController extends BaseController {

  public function index() {
    echo $this->render('index', [
      'name' => 'Marco'
    ]);
  }

}
