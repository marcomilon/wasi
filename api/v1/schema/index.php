<?php

include '../../bootstrap.php';

use Wasi\Api\Io\Schema;
use Wasi\Api\RouterWrapper;

$schema = new Schema(new Wasi\Api\Io\FileSystem\Schema());
$model = $schema->getModel();
$uri = 'schemas';
$routerWrapper = new RouterWrapper($model, $uri);
$routerWrapper->execute();
