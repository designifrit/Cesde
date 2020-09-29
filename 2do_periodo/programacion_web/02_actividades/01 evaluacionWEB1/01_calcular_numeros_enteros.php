
<?php /*Hacer un programa en PHP que permita mostrar en pantalla la suma, resta, multiplicación, de dos números enteros almacenados en 2, variables diferentes (utilice formularios HTML).*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular 2 números enteros</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular 2 números enteros</title>
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
        </nav>
    </header>
</div>

<div class="container">

    <section class="row" id="section1">
        <h1>Calcular 2 números enteros</h1>
    </section>

    <section class="row" id="section2">
        <div class="col">
            <form action="01_calcular_numeros_enteros.php" method="post">
                <div class="form-group">
                    <label for="numero1">numero 1</label>
                    <input type="number" class="form-control" id="numero1" placeholder="Ingrese 1er número" name="numero1">
                </div>
                <div class="form-group">
                    <input type="radio" id="suma" name="operacion" value="suma">
                    <label for="suma">Suma</label><br>
                    <input type="radio" id="resta" name="operacion" value="resta">
                    <label for="resta">Resta</label><br>
                    <input type="radio" id="multiplicacion" name="operacion" value="multiplicacion">
                    <label for="multiplicacion">Multiplicación</label><br>
                    <input type="radio" id="division" name="operacion" value="division">
                    <label for="division">División</label>

                </div>
                <div class="form-group">
                    <label for="numero2">numero 2</label>
                    <input type="number" class="form-control" id="numero2" placeholder="Ingrese 2do número" name="numero2">
                </div>
                <button type="reset" class="btn btn-secondary margen">Borrar</button>
                <button type="submit" class="btn btn-primary margen">Enviar</button>
            </form>

            <?php
                if(){

                }else{
                    print();
                }
            ?>

        </div>
    </section>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>


