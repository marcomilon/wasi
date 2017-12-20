<!doctype html>
<html lang="en">
<head>
    <title>Wasi</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="css/wasi.css">
    
    <script src="https://use.fontawesome.com/1713130405.js"></script>
</head>
<body>
    <div class="container-fluid h-100">
        
        <div class="row h-100">
            <div class="col-sm-2 menu">
                <h1 class="menu__title">Wasi</h1>
                <nav class="nav flex-column">
                    <a class="nav-link active menu__link" href="index.php?r=schema"><i class="fa fa-file-text-o" aria-hidden="true"></i> Schemas</a>
                    <a class="nav-link menu__link" href="index.php?r=set"><i class="fa fa-clone" aria-hidden="true"></i> Sets</a>
                    <a class="nav-link menu__link" href="index.php?r=document"><i class="fa fa-sticky-note-o" aria-hidden="true"></i> Documents</a>
                </nav>
            </div>
            <div class="col-sm-10">
                <?= $content ?>
            </div>
        </div>
    </div>
</body>
</html>