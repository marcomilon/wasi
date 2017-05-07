<?php

namespace Wasi\Web\Controllers;

use Wasi\Framework\Controller;
use Wasi\Web\Models\Schema;

class SchemaController extends Controller {

  public function index() {
    $schema = new Schema();
    $items = $schema->items();

    echo $this->render('index', [
      'items' => $items
    ]);
  }

  public function create() {
    if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
      $schema = new Schema();
      if($schema->create()) {
        header("Location: index.php?r=schema");
        exit();
      } else {

      }
    }

    echo $this->render('create');
  }

  public function update($hash) {
    $schema = new Schema();
    $item = $schema->read($hash);
    $this->render('update', [
      'item' => $item
    ]);
  }

  public function delete($hash) {
    $schema = new Schema();
    $schema->delete($hash);
  }

}
