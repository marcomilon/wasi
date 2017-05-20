<?php

include '../../bootstrap.php';

use Wasi\Api\Router;

$router = new Router();

$router->route('GET', '/ping/', function() {
  $response = ['status' => time()];
  echo json_encode($response);
});

$router->execute();
