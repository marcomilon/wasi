<?php

require('layout/header.php');
require_once('config/web.php');

if(!empty($_POST)) {

  if(!empty($_POST['title']) && !empty($_POST['schema'])) {

    $params = [
      'title' => $_POST['title'],
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
    $result = file_get_contents($config['api'] . '/schemas', false, $context);
    var_dump($result);
  }

}

?>

<div class="page-header">
  <h1><a href="index.php">Wasi</a></h1>
  <p class="lead">Create new schema</p>
</div>

<ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li class="active">New schema</li>
</ol>

<form method="post" action="">
  <div class="row">
    <div class="col-md-12">
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="Title">
      </div>
      <div class="form-group">
        <label for="schema">Schema (Json)</label>
        <textarea class="form-control" name="schema" rows="12" id="schema"></textarea>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 text-right">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<?php require('layout/footer.php'); ?>
