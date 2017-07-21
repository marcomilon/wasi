<?php

error_reporting(E_ALL);

include '../../framework/bootstrap.php';
include '../src/config/web.php';

use Wasi\Framework\Application;

$application = new Application($params);
