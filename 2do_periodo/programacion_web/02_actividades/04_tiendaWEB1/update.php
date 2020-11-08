
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alore store / </title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e
    /ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">

    <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

</head>
<body>

    <nav id="nav">
        <div class="navbar">
            <div id="login" class="container">
                <ul class="row">
                    <li><a href="#"><span class="material-icons">account_circle</span>Log in</a></li>
                    <li><a href="#"><span>•</span>Crear cuenta</a></li>
                </ul>
            </div>
        </div>
        <div>
            <div id="nav_menu" class="container">
                <a href="index.php" class="navbar-brand"><img src="img/logo.png" width="70" alt="Logo - Volver al inicio"></a>
                <ul class="row">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="create.php">Create</a></li>
                    <li><a href="update.php">Update</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header id="header" class="container-fluid">
        <div class="row">
            <div id="slider">
                <figure>
                    <img src="img/header2.jpg" alt="Fotografia modelo">
                    <img src="img/header3.jpg" alt="Fotografia modelo">
                    <img src="img/header1.jpg" alt="Fotografia modelo">
                    <img src="img/header4.jpg" alt="Fotografia modelo">
                    <img src="img/header2.jpg" alt="Fotografia modelo">
                </figure>
            </div>
        </div>
    </header>

    <footer class="container" id="footer">
        <div class="row">
            <div class="col-12 col-sm-4 navmap">
                <h5>Atención Cliente</h5>
                <ul>
                    <li><a href="contact.php">Contactanos</a></li>
                    <li><a href="create.php">Create</a></li>
                    <li><a href="update.php">Update</a></li>
                    <li><a href="#">Sobre nosotros</a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-4 navmap">
                <h5>Sobre</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, deleniti itaque rerum tempore laboriosam voluptates aliquam quasi dolorum iure, quod officia provident mollitia illum, recusandae qui expedita necessitatibus neque veritatis.</p>
            </div>
            <div class="col-12 col-sm-4 navmap">
                <h5>Newsletter</h5>
                <p><em>Únete a nuestro correo promocional</em></p>
                <form action="index.php" method="POST">
                    <div class="form-group">
                        <input type="email" name="suscribe" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="correo">
                        <button type="button" class="btn">enviar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col rights">
                <h6>Todos los derechos reservados © Alejandro Orozco ❤</h6>
            </div>
        </div>
    </footer>

	<script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>