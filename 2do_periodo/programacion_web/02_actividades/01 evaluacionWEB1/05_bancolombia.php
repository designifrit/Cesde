
<?php /*Bancolombia contrata sus servicios de desarrollador para realizar un programa en PHP que permita:

    - Almacenar en variables información de nombre, teléfono, dirección y salario de 5 usuarios de una sucursal llamada sucursal A.
    - Sumar todos los salarios de los usuarios de la sucursal A en una sola variable llamada $sumatoriaSalarios y así poder comparar dicho valor con las sucursales B cuyo valor de salarios mensuales es de 40.000.000 y la sucursal C cuyo valor de salarios mensuales es de 32.000.000.

Permita que su código muestre cual sucursal tiene la mejor sumatoria de salarios y además muestre en pantalla la información completa de los 5 usuarios de la sucursal A*/ ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicativo Bancolombia</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div>
    <header id="header">
        <nav class="navbar navbar-dark bg-primary" id="nav">
            <a class="navbar-brand" href="#">
                <img src="https://www.php.net/images/logos/php-logo.svg" width="30" height="30" alt="" loading="lazy">
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Programación web 1</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
</div>

<div class="container">

    <section class="row" id="section1">
        <h1>Aplicativo Bancolombia</h1>
    </section>

    <section class="row justify-content-md-center" id="section2">
        <div class="col-12">
            <form action="05_bancolombia.php" method="post">
                <h6>Por favor ingrese la información del usuario</h6>
                <div class="form-group margen">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" placeholder="Nombre del usuario" name="nombre" require>
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <input type="number" class="form-control" id="telefono" placeholder="Ingrese el teléfono" name="telefono" require>
                </div>
                <div class="form-group">
                    <label for="direccion">Dirección</label>
                    <input type="text" class="form-control" id="direccion" placeholder="Ingrese la dirección" name="direccion" require>
                </div>
                <div class="form-group">
                    <label for="salario">Salario</label>
                    <input type="number" class="form-control" id="salario" placeholder="Cuál es el salario" name="salario" require>
                </div>
                <button type="reset" class="btn btn-secondary margen">Borrar</button>
                <button type="submit" class="btn btn-primary margen" name="enviar">Enviar</button>
            </form>
        </div>
        <div class="col-12">
            <?php if($_POST['enviar']):?>
                <?php
                    $usuariosSucursalA = [];
                ?>
            <?php endif ?>
        </div>
    </section>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>
