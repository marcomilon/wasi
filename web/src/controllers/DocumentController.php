<?php

namespace Wasi\Web\Controllers;

use Wasi\Web\Models\Document;
use Wasi\Web\Models\Set;

class DocumentController extends BaseController {

  public function index() {
    $model = new Document();
    $items = $model->items();

    echo $this->render('index', [
      'items' => $items,
      'errors' => $model->errors
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
