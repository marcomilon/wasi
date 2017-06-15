<?php

namespace Wasi\Web\Controllers;

use Wasi\Web\Models\Schema;

class SetController extends BaseController {

  public function index() {

    echo $this->render('index',
    ['items' => []]
  );
}

public function create() {
  echo $this->render('create');
}

}
