<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Error 500</title>

  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <style>
  body {
    font-family: 'Raleway', sans-serif;
  }

  .error {
    font-size: 40px;
    color: red;
  }

  .align-center {
    text-align: center;
  }
  </style>

</head>

<body>
    <p class="error">
      Error 500
    </p>
    <p>
      <?= $error ?>
    </p>
    <hr>
    <pre><?php debug_print_backtrace() ?></pre>
</body>

</html>
