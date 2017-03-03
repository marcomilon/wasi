<?php

$app = realpath(dirname(__FILE__) . '/../../');

$config = [
  'paths' => [
    'app' => $app,
    'content' => $app .'/content',
    'classes' => $app . '/api/classes'
  ]
];
