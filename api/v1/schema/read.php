<?php

require_once dirname(__FILE__) . '/../bootstrap.php';

$dir = $config['root'] . '/schema/';

$files = array_slice(scandir($dir), 3);

var_dump($files);
