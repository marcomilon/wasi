<?php

$app = dirname(dirname(__FILE__));

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$public = str_replace('index.php', '', $urlPath);


$params = [
  'api' => 'http://localhost/wasi/api/v1',
  'app' => $app,
  'public' => $public,
  'defaultController' => 'DefaultController',
];
