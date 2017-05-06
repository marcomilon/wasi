<?php

namespace Wasi\Web\Controllers;

use Wasi\Framework\Controller;

class SchemaController extends Controller {


  public function index() {
    $api = \Wasi\Framework\Application::params('api');
    $schemas = json_decode(file_get_contents($api . '/schemas'));
    echo $this->render('index', [
      'schemas' => $schemas
    ]);
  }

  public function create() {

    if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {

      $params = [
        'name' => $_POST['name'],
        'schema' => $_POST['schema']
      ];

      $query = http_build_query($params);

      $contextData = [
        'method' => 'POST',
        'header' => "Connection: close\r\n".
        "Content-Length: ".strlen($query)."\r\n",
        'content'=> $query
      ];

      $context = stream_context_create(['http' => $contextData]);

      // Read page rendered as result of your POST request
      $api = \Wasi\Framework\Application::params('api');
      $result = file_get_contents($api . '/schemas', false, $context);
      if($result > 0) {
        header('Location: index.php?r=schema');
        exit();
      }
    }
    echo $this->render('create');
  }

  public function update($hash) {
    $api = \Wasi\Framework\Application::params('api');
    $schema = json_decode(file_get_contents($api . '/schemas/'.$hash));

    $this->render('update', [
      'schema' => $schema
    ]);
  }

}
