<?php

namespace Wasi\Web\Controllers;

use Wasi\Framework\Controller;

class SchemaController extends Controller {

  public function index() {
    echo $this->render('index', [
    ]);
  }

  public function helloworld() {
    echo "helllWord";
  }

}
