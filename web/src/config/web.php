<?php

$app = dirname(dirname(__FILE__));
$public = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$params = [
  'api' => 'http://localhost/wasi/api/v1',
  'app' => $app,
  'public' => $public,
  'defaultController' => 'DefaultController',
];
