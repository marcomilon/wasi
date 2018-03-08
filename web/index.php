<?php

require __DIR__ . '/../vendor/autoload.php';
$config = require __DIR__ . '/../config/main.php';

$app = new micro\Application($config);
$app->run($_GET);