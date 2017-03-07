<?php

$app = realpath(dirname(__FILE__) . '/../../');

$config = [
  'paths' => [
    'app' => $app,
    'content' => $app .'/api/content',
    'classes' => $app . '/api/classes'
  ]
];
