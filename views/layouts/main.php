<!doctype html>
<html lang="en">
<head>
    <title>Wasi</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="css/wasi.css">
</head>
<body>
    <div class="container-fluid h-100">
        
        <div class="row h-100">
            <div class="col-md-2 menu">
                <h1 class="menu__title"><a href="/" class="logo__link">Wasi</a></h1>
                <nav class="nav flex-column">
                    <a class="nav-link <?= empty($_GET['r']) ? 'menu__active' : '' ?> menu__link" href="/"><i class="fas fa-home"></i> Home</a>
                    <a class="nav-link <?= $_GET['r'] == 'form' ? 'menu__active' : '' ?> menu__link" href="index.php?r=form"><i class="far fa-list-alt"></i> Forms</a>
                    <a class="nav-link <?= $_GET['r'] == 'set' ? 'menu__active' : '' ?> menu__link" href="index.php?r=set"><i class="fa fa-clone"></i> Sets</a>
                    <a class="nav-link <?= $_GET['r'] == 'document' ? 'menu__active' : '' ?> menu__link" href="index.php?r=document"><i class="far fa-file"></i></i> Documents</a>
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