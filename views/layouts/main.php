<!doctype html>
<html lang="en">
<head>
  <title>Wasi <?= isset($this->parameters['title']) ? ' - ' . $this->parameters['title'] : '' ?></title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  
  <script src="https://use.fontawesome.com/releases/v5.0.4/js/solid.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.4/js/regular.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.4/js/fontawesome.js"></script>
  
  <link rel="stylesheet" href="css/wasi.css">
</head>
<body>
  <div class="container-fluid h-100">
    
    <div class="row h-100">
      <div class="col-md-2 fixed-top menu">
        <h1 class="menu__title"><a href="index.php" class="logo__link">Wasi</a></h1>
        <nav class="nav flex-column">
          <a class="nav-link menu__link <?= empty($_GET['r']) ? 'menu__link--active' : '' ?>" href="index.php"><i class="fas fa-home"></i> Home</a>
          <a class="nav-link menu__link <?= stripos($_GET['r'], 'element') !== false ? 'menu__link--active' : '' ?>" href="index.php?r=element/default/index"><i class="far fa-list-alt"></i> Elements</a>
          <a class="nav-link menu__link <?= stripos($_GET['r'], 'set') !== false ? 'menu__link--active' : '' ?>" href="index.php?r=set/default/index"><i class="fa fa-clone"></i> Sets</a>
          <a class="nav-link menu__link <?= stripos($_GET['r'], 'document') !== false ? 'menu__link--active' : '' ?>" href="index.php?r=document/default/index"><i class="fas fa-th-large"></i> Documents</a>
        </nav>
      </div>
      <div class="offset-2 col-md-10">
        <?= $content ?>
      </div>
    </div>
  </div>
  
  <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="confirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="confirmationModalLabel">Danger</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Are you sure you want to delete the resource?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary" id="confirmation-modal-yes">Yes</button>
        </div>
      </div>
    </div>
  </div>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  <script async src="js/wasi.js"></script>
  <script async src="js/micro-form.js"></script>
</body>
</html>