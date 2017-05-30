<?php

namespace Wasi\Web\Controllers;

use Wasi\Web\Models\Schema;

class SchemaController extends BaseController {

  public function index() {
    $model = new Schema();
    $items = $model->items();

    echo $this->render('index', [
      'items' => $items,
      'errors' => $model->errors
    ]);
  }

  public function create() {

    $schema = new Schema();

    if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {

      $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
      $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_STRING);

      $schema->name = $name;
      $schema->body = $body;

      if($schema->create()) {
        header("Location: index.php?r=schema");
        exit();
      }
    }

    echo $this->render('create', [
      'model' => $schema
    ]);
  }

  public function update($hash) {
    $hash = filter_input(INPUT_GET, 'hash', FILTER_SANITIZE_STRING);

    $schema = new Schema();

    if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {

      $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
      $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_STRING);

      $schema->name = $name;
      $schema->body = $body;

      if($schema->update($hash)) {
        header("Location: index.php?r=schema");
        exit();
      }

    }


    $item = $schema->read($hash);

    $this->render('update', [
      'model' => $schema,
      'item' => $item
    ]);
  }

  public function delete($hash) {
    $hash = filter_input(INPUT_GET, 'hash', FILTER_SANITIZE_STRING);

    $schema = new Schema();
    $schema->delete($hash);
  }

}
