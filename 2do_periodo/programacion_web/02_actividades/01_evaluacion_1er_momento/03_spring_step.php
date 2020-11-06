
<?php /*Codificar un programa en PHP para la tienda Spring Step que tiene una promoción de descuento, esta dependerá del número de zapatos que se compren.
    - Si son 3 pares se les dará un 10% de descuento al cliente sobre el total de la compra
    - Si el número de zapatos es mayor 3 pares, pero menor o igual de 8 pares, se le otorga un 20% de descuento
    - si son más 8 pares de zapatos se otorgará un 50% de descuento. Defina la cantidad de variables que necesite, el costo de cada par de zapatos y establezca el valor total de la compra de zapatos.*/ ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spring step Descuento</title>
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
        <h1>Spring step Promoción</h1>
    </section>

    <section class="row justify-content-md-center" id="section2">
        <div class="col">
            <form action="03_spring_step.php" method="post">
                <div class="form-group">
                    <label for="cantidadZapatos">Cantidad de zapatos</label>
                    <input type="number" class="form-control" id="cantidadZapatos" placeholder="Ingrese la cantidad de zapatos a comprar" name="cantidadZapatos" require>
                </div>
                <div class="form-group">
                    <label for="valorZapatos">Cuál es el valor de los zapatos</label>
                    <input type="number" class="form-control" id="valorZapatos" placeholder="Ingrese el valor de los zapatos" name="valorZapatos" require>
                </div>
                <button type="reset" class="btn btn-secondary margen">Borrar</button>
                <button type="submit" class="btn btn-primary margen" name="enviar">Enviar</button>
            </form>
            <?php if(isset($_POST['enviar'])):?>
                <?php
                    function valorPagar(){
                        $total = 0;
                        $total = $_POST['cantidadZapatos'] * $_POST['valorZapatos'];
                        return $total;
                    }
                    function valorPagarDescuento(){
                        $soloDescuento = 0;
                        $descuento = 0;
                        $valorXZapato = 0;
                        if($_POST['cantidadZapatos'] !="" && $_POST['valorZapatos'] !=""){
                            if($_POST['cantidadZapatos'] == 3){
                                $soloDescuento = valorPagar() * 0.10;
                                $descuento = $soloDescuento + valorPagar();
                                $valorXZapato = $descuento / $_POST['cantidadZapatos'];
                                print("El valor total a pagar es de: $".$descuento.". Tiene un descuento del 10% de: $".$soloDescuento.". El valor de cada par es de: $".$valorXZapato);
                            }elseif($_POST['cantidadZapatos'] > 3 && $_POST['cantidadZapatos'] <= 8){
                                $soloDescuento = valorPagar() * 0.20;
                                $descuento = $soloDescuento + valorPagar();
                                $valorXZapato = $descuento / $_POST['cantidadZapatos'];
                                print("El valor total a pagar es de: $".$descuento.". Tiene un descuento del 20% de: $".$soloDescuento.". El valor de cada par es de: $".$valorXZapato);
                            }elseif($_POST['cantidadZapatos'] > 8){
                                $soloDescuento = valorPagar() * 0.50;
                                $descuento = $soloDescuento + valorPagar();
                                $valorXZapato = $descuento / $_POST['cantidadZapatos'];
                                print("El valor total a pagar es de: $".$descuento.". Tiene un descuento del 50% de: $".$soloDescuento.". El valor de cada par es de: $".$valorXZapato);
                            }else{
                                $descuento = valorPagar();
                                print("No tiene derecho al descuento. El valor a pagar es de: $".$descuento);
                            }
                        }else{
                            print("Ingresa la cantidad de zapatos a comprar");
                        }
                    }
                ?>
                <h6>
                    <?php
                        valorPagarDescuento();
                    ?>
                </h6>
            <?php endif ?>
        </div>
    </section>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>