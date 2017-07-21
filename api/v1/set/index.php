<?php

include '../../bootstrap.php';

use Wasi\Api\Handler\FileSystem\Schema;
use Wasi\Api\RouterWrapper;

$model = new Schema();
$uri = 'sets';
$routerWrapper = new RouterWrapper($model, $uri);
$routerWrapper->execute();
