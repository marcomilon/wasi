<?php

include '../../bootstrap.php';

use Wasi\Api\Io\Set;
use Wasi\Api\RouterWrapper;

$set = new Set(new Wasi\Api\Io\FileSystem\Set());
$model = $set->getModel();
$uri = 'sets';
$routerWrapper = new RouterWrapper($model, $uri);
$routerWrapper->execute();
