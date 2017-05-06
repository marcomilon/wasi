<?php

namespace Wasi\Web\Controllers;

use Wasi\Framework\Controller;


class DocumentController extends Controller {

  public function index() {
    $items = [];

    echo $this->render('index', [
      'items' => $items
    ]);
  }

  public function create() {
    echo $this->render('create');
  }

}
