<?php

include '../../bootstrap.php';

use Wasi\Api\Handler\FileSystem\Schema;
use Wasi\Api\RouterWrapper;

$model = new Schema();
$uri = 'schemas';
$routerWrapper = new RouterWrapper($model, $uri);
$routerWrapper->execute();
