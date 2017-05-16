<?php

include '../../bootstrap.php';

use Wasi\Api\Handler\FileSystem\Schema;
use Wasi\Api\Router;

$router = new Router();

$router->route('GET', '/ping$/', function() {
  
});
