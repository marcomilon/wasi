<?php

namespace Wasi\Web\Controllers;

use Wasi\Web\Models\Set;

class DocumentController extends BaseController {

  public function index() {
    $items = [];

    echo $this->render('index', [
      'items' => $items
    ]);
  }

  public function create() {
    $set = new Set();
    $items = $set->items();

    echo $this->render('create', [
      'items' => $items
    ]);
  }

}
