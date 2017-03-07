<?php

require_once('config/web.php');
$schemas = json_decode(file_get_contents($config['api'] . '/schemas'));

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="marco.milon@gmail.com">

  <title>Wasi | Simple headless CMS</title>

  <!-- Bootstrap core CSS -->
  <link href="https://fonts.googleapis.com/css?family=Lato|Roboto+Condensed" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/sidebar.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css" rel="stylesheet">
  <link href="css/wasi.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <script src="js/jsoneditor.min.js"></script>
  <script>
  // Set the default CSS theme and icon library globally
  JSONEditor.defaults.theme = 'bootstrap3';
  </script>
</head>

<body>

  <div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <li class="sidebar-brand">
          <h1><a href="index.php">Wasi</a></h1>
        </li>
        <?php foreach($schemas as $schema): ?>
          <?php $item = json_decode($schema, true); ?>
          <li><a href="list.php?hash=<?= $item['hash'] ?>"><?= $item['name'] ?> (0)</a></li>
        <?php endforeach ?>
      </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <div class="container-fluid">
