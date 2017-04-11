<?php

require('../layout/header.php');

if(!empty($_POST) && isset($_POST['name']) && isset($_POST['schema'])) {

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
  $result = file_get_contents($params['api'] . '/schemas', false, $context);
  if($result > 0) {
      header('Location: ' . $_SERVER['PHP_SELF']);
      exit();
  } else {

  }
}

?>

<ol class="breadcrumb">
  <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
  <li class="active">New schema</li>
</ol>

<form method="post" action="">
  <div class="row">
    <div class="col-md-10">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name">
      </div>
      <div class="form-group">
        <label for="schema">Schema (Json)</label>
        <textarea class="form-control" name="schema" rows="12" id="schema"></textarea>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-10 text-right">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<?php require('../layout/footer.php'); ?>
