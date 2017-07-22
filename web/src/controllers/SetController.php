<?php

namespace Wasi\Web\Controllers;

use Wasi\Web\Models\Schema;
use Wasi\Web\Models\Set;

class SetController extends BaseController {

  public function index() {

    $set = new Set();
    $items = $set->items();

    echo $this->render('index',
    ['items' => $items]);
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
      'model' => $set,
      'items' => $items
    ]);
  }

  public function update($hash) {
    $hash = filter_input(INPUT_GET, 'hash', FILTER_SANITIZE_STRING);

    $schema = new Schema();
    $items = $schema->items();

    $set = new Set();

    if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {

      $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
      $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY);

      $set->name = $name;
      $set->body = json_encode($body);

      if($set->update($hash)) {
        header("Location: index.php?r=set");
        exit();
      }

    }

    $item = $set->read($hash);
    if($item->body != 'false') {
      $hashes = json_decode(html_entity_decode($item->body), true);
    } else {
      $hashes = [];
    }

    $this->render('update', [
      'model' => $set,
      'items' => $items,
      'item' => $item,
      'hashes' => $hashes
    ]);

  }

  public function delete($hash) {
    $hash = filter_input(INPUT_GET, 'hash', FILTER_SANITIZE_STRING);

    $set = new Set();
    $set->delete($hash);
  }

}
