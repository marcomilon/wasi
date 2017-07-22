<?php

include '../../bootstrap.php';

use Wasi\Api\Handler\FileSystem\Set;
use Wasi\Api\RouterWrapper;

$model = new Set();
$uri = 'sets';
$routerWrapper = new RouterWrapper($model, $uri);
$routerWrapper->execute();
