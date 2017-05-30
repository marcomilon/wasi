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
  $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_STRING);
  $body = trim(preg_replace('/\s+/S', '', $body));

  $hash = md5($body);
  $data = [
    'hash' => $hash,
    'name' => $name,
    'body' => $body
  ];

  $schema = new Schema();
  echo $schema->create($hash, $data);
});

$router->route('PUT', '/schemas\/(.*)$/', function($matches) {
  parse_str(file_get_contents('php://input'), $_PUT);

  $name  = filter_var($_PUT['name'], FILTER_SANITIZE_STRING);
  $body = filter_var($_PUT['body'], FILTER_SANITIZE_STRING);
  $body = trim(preg_replace('/\s+/S', '', $body));

  $hash = $matches;
  $data = [
    'hash' => $hash,
    'name' => $name,
    'body' => $body
  ];

  $schema = new Schema();
  echo $schema->create($hash, $data);
});

$router->route('DELETE', '/schemas\/(.*)$/', function($matches) {
  $schema = new Schema();
  echo $schema->delete($matches);
});

$router->execute();
