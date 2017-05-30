<?php

namespace Wasi\Web\Controllers;

class DocumentController extends BaseController {

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
