
<?php /*El gimnasio Bodytech, lo contrata para desarrollar una aplicación web que permita a sus usuarios calcular el índice de masa corporal basado en el formula
IMC = PESO / (ALTURA * ALTURA)*/ ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular índice de masa corporal</title>
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
        <h1>Calcular índice de masa corporal</h1>
    </section>

    <section class="row justify-content-md-center" id="section2">
        <div class="col">
            <form action="02_calcular_indice_masa_corporal.php" method="post">
                <div class="form-group">
                    <label for="peso">Peso</label>
                    <input type="number" class="form-control" id="peso" placeholder="Ingrese su peso en kg" name="peso" step="any" require>
                </div>
                <div class="form-group">
                    <label for="altura">Altura</label>
                    <input type="number" class="form-control" id="altura" placeholder="Ingrese su altura (ejemplo: 1.75)" name="altura" step="any" require>
                </div>
                <button type="reset" class="btn btn-secondary margen">Borrar</button>
                <button type="submit" class="btn btn-primary margen" name="enviar">Enviar</button>
            </form>

            <?php if(isset($_POST['enviar'])):?>
                <?php
                    function IMC(){
                        $resultado = 0;
                        if($_POST['peso'] !="" && $_POST['altura'] !=""){
                            $resultado = $_POST['peso'] / ($_POST['altura'] * $_POST['altura']);
                        }else{
                            print("Ingrese un valor en los campos. "."<br>");
                        }
                        return $resultado;
                    }
                ?>
                <br>
                <h5>
                    <?php
                        print("Su índice de masa corporal es: ".IMC());
                    ?>
                </h5>
                <br>
                <h6>
                    <?php if($_POST['peso'] !="" && $_POST['altura'] !=""):?>
                        <?php
                        if(IMC() <= 15){
                            echo "Delgadez muy severa";
                        }elseif(IMC() > 15 && IMC() <= 15.9){
                            echo "Delgadez severa";
                        }elseif(IMC() > 15.9 && IMC() <= 18.4){
                            echo "Delgadez";
                        }elseif(IMC() > 18.4 && IMC() <= 24.9){
                            echo "Peso saludable";
                        }elseif(IMC() > 24.9 && IMC() <= 29.9){
                            echo "Sobrepeso";
                        }elseif(IMC() > 29.9 && IMC() <= 34.9){
                            echo "Obesidad moderada";
                        }elseif(IMC() > 34.9 && IMC() <= 39.9){
                            echo "Obesidad severa";
                        }elseif(IMC() > 39.9){
                            echo "Obesidad mórbida";
                        }
                        ?>
                    <?php endif ?>
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
