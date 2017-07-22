<?php

namespace Wasi\Web\Controllers;

use Wasi\Web\Models\Schema;
use Wasi\Web\Models\Set;

class SetController extends BaseController {

  public function index() {

    echo $this->render('index',
    ['items' => []]
  );
}

public function create() {

  $schema = new Schema();
  $items = $schema->items();

  $set = new Set();

  if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY);

    $set->name = $name;
    $set->body = json_encode($body);

    if($set->create()) {
      header("Location: index.php?r=set");
      exit();
    }
  }


  echo $this->render('create', [
    'items' => $items,
    'model' => $set
  ]);
}

}
