<?php

require_once dirname(__FILE__) . '/../../config/api.php';
$path = $config['paths'];

require_once $path['classes'] . '/Router.php';

$router = new Router();

$router->route('GET', '/documents\/(.*)$/', function($matches) use ($path) {
  var_dump($matches);
});

$router->execute();
