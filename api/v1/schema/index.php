<?php

include '../../bootstrap.php';

$router = new Wasi\Api\Router();

$router->route('GET', '/schemas$/', function() use ($path) {
  echo "Hello";
  exit();
  $pattern = $path['content'] . '/schema/*.json';
  $result = [];
  foreach (glob($pattern) as $filename) {
    $json = file_get_contents($filename);
    $result[] = $json;
  }

  header('Content-Type: application/json');
  echo json_encode($result);
});

$router->route('POST', '/schemas$/',function() use ($path) {
  $name  = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
  $schema = filter_input(INPUT_POST, 'schema', FILTER_SANITIZE_STRING);

  $schema = trim(preg_replace('/\s+/S', '', $schema));

  $hash = md5($schema);
  $data = [
    'hash' => $hash,
    'name' => $name,
    'schema' => $schema
  ];

  $filename = $path['content'] . '/schema/'. $hash . '.json';
  $body = json_encode($data);
  echo file_put_contents($filename, $body);
});

$router->execute();
