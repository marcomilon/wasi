<?php

$method = $_SERVER["REQUEST_METHOD"];

switch($method) {
  case 'GET':
    var_dump($_GET);
  break;
  case 'POST':
  // Insert
  case 'PUT':
  // Update
  case 'DELETE':
  // Delete
  default:
  // Invalid Request Method
  header("HTTP/1.0 405 Method Not Allowed");
  break;
}
