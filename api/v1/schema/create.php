<?php

require_once dirname(__FILE__) . '/../bootstrap.php';

// Sanitize
$title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
$schema = filter_input(INPUT_POST, 'schema', FILTER_SANITIZE_STRING);

// Validate
if(empty($_POST['title']) && empty($_POST['schema'])) {
  header('Location: '. $config['web'] . '/schema.php');
}

$data = [
  'title' => $title,
  'schema' => $schema
];

$serial = serialize($data);
$hash = md5($serial);

$filename = $config['root'] . '/schema/' . $hash;

file_put_contents($filename, $serial);
