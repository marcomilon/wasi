<!doctype html>
<html lang="en">
<head>
    <title>Wasi</title>
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
            <div class="col-md-2 menu">
                <h1 class="menu__title"><a href="/" class="logo__link">Wasi</a></h1>
                <nav class="nav flex-column">
                    <a class="nav-link menu__link <?= empty($_GET['r']) ? 'menu__link--active' : '' ?>" href="/"><i class="fas fa-home"></i> Home</a>
                    <a class="nav-link menu__link menu__link--document <?= stripos($_GET['r'], 'document') !== false ? 'menu__link--active' : '' ?>" href="index.php?r=document/default/index"><i class="far fa-file"></i></i> Documents</a>
                    <a class="nav-link menu__link <?=  stripos($_GET['r'], 'form') !== false ? 'menu__link--active' : '' ?>" href="index.php?r=form/default/index"><i class="far fa-list-alt"></i> Forms</a>
                    <a class="nav-link menu__link <?=  stripos($_GET['r'], 'set') !== false ? 'menu__link--active' : '' ?>" href="index.php?r=set/default/index"><i class="fa fa-clone"></i> Sets</a>
                </nav>
            </div>
            <div class="col-md-10">
                <?= $content ?>
            </div>
        </div>
    </div>
    <script async src="js/wasi.js"></script>
</body>
</html>