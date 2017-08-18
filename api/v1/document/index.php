<?php

include '../../bootstrap.php';

use Wasi\Api\Io\Document;
use Wasi\Api\RouterWrapper;

$document = new Set(new Wasi\Api\Io\FileSystem\Document());
$model = $document->getModel();
$uri = 'documents';
$routerWrapper = new RouterWrapper($model, $uri);
$routerWrapper->execute();
