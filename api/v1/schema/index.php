<?php

include '../../bootstrap.php';

use Wasi\Api\Handler\FileSystem\Schema;
use Wasi\Api\Router;

$router = new Router();

$router->route('GET', '/schemas$/', function() {
  $schema = new Schema();
  echo $schema->items();
});

$router->route('GET', '/schemas\/(.*)$/', function($matches) {
  $schema = new Schema();
  echo $schema->read($matches);
});

$router->route('POST', '/schemas$/', function() {
  $name  = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
  $schema = filter_input(INPUT_POST, 'schema', FILTER_SANITIZE_STRING);
  $schema = trim(preg_replace('/\s+/S', '', $schema));

  $hash = md5($schema);
  $data = [
    'hash' => $hash,
    'name' => $name,
    'schema' => $schema
  ];

  $schema = new Schema();
  echo $schema->create($hash, $data);
});

$router->execute();
