<?php

$app = dirname(dirname(__FILE__));

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$public = $urlPath != '/' ? str_replace('/index.php', '', $urlPath) : '';

$params = [
  'api' => 'http://localhost/~fs/wasi/api/v1',
  'app' => $app,
  'public' => $public,
  'defaultController' => 'DefaultController',
];
