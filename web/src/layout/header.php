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
  <link href="<?= \Wasi\Framework\Application::params('public') ?>/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= \Wasi\Framework\Application::params('public') ?>/css/sidebar.css" rel="stylesheet">
  <link href="<?= \Wasi\Framework\Application::params('public') ?>/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?= \Wasi\Framework\Application::params('public') ?>/css/wasi.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <script src="<?= \Wasi\Framework\Application::params('public') ?>/js/jsoneditor.min.js"></script>
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
        <li><a href="index.php?r=schema/index">Schemas</a></li>
        <li><a href="index.php?r=set/index">Set</a></li>
        <li><a href="index.php?r=document/index">Document</a></li>

      </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <div class="container container-wasi">

        <?php if(!empty($errors)): ?>
        <div class="alert alert-danger">
          <strong>Danger!</strong> <?= $errors[0] ?>
        </div>
        <?php endif; ?>
