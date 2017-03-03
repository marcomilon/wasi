<?php

require_once dirname(__FILE__) . '/../../config/api.php';
$path = $config['paths'];

require_once $path['classes'] . '/Router.php';

$router = new Router();

$router->route('GET', '/schemas$/', function() use ($path) {
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
  $title  = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
  $schema = filter_input(INPUT_POST, 'schema', FILTER_SANITIZE_STRING);

  $schema = trim(preg_replace('/\s+/S', '', $schema));

  $data = [
    'title' => $title,
    'schema' => $schema
  ];

  $filename = $path['content'] . '/schema/'. md5(serialize($data)) . '.json';
  $body = json_encode($data);
  echo file_put_contents($filename, $body);
});

$router->execute();
