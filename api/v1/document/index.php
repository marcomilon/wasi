<?php

include '../../bootstrap.php';

use Wasi\Api\Router;
use Wasi\Api\Handler\FileSystem\Content;

$router = new Router();

$router->route('GET', '/documents\/(.*)$/', function($matches) use ($path) {
  $content = new Content();
  var_dump($matches);exit();
});

$router->execute();
