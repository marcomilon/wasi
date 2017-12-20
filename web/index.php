<?php

require __DIR__ . '/../vendor/autoload.php';

use micro\Application;

$app = new Application();
$app->run($_GET);