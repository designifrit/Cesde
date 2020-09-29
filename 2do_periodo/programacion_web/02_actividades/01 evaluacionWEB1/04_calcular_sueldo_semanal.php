
<?php /*Hacer un programa en PHP para ayudar a un trabajador de Postobón a saber cuál será su sueldo semanal, se sabe que, si trabaja 40 horas o menos, se le pagará $20000 por hora, pero si trabaja más de 40 horas entonces las horas extras se le pagarán a $25000 por hora.*/ ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular sueldo semanal</title>
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
        <h1>Calcular sueldo semanal</h1>
    </section>

    <section class="row justify-content-md-center" id="section2">
        <div class="col-12">
            <form action="04_calcular_sueldo_semanal.php" method="post">
                <div class="form-group">
                    <label for="horasTrabajadasSemana">Cuantas horas trabajó en la semana</label>
                    <input type="number" class="form-control" id="horasTrabajadasSemana" placeholder="Ingrese la cantidad de horas trabajadas" name="horasTrabajadasSemana" require>
                </div>
                <button type="reset" class="btn btn-secondary margen">Borrar</button>
                <button type="submit" class="btn btn-primary margen" name="enviar">Enviar</button>
            </form>
        </div>
        <div class="col-12">
            <?php if(isset($_POST['enviar'])):?>
                <?php
                    function salario($horas){
                        $valorHora = 20000;
                        $valorHoraExtra = 25000;
                        $salarioBruto = 0;
                        $salarioNeto = 0;
                        if($horas !=""){
                            if($horas <= 40){
                                $salarioNeto = $valorHora * $horas;
                                print("Horas trabajadas: ".$horas."<br>"."No realizó horas extras"."<br>");
                            }elseif($horas > 40){
                                $salarioBruto = ($horas - 40) * $valorHoraExtra;
                                $salarioNeto = $salarioBruto + ($valorHora * 40);
                                print("Horas trabajadas: ".$horas."<br>"."El valor de las horas extras es de: $".$salarioBruto."<br>");
                            }
                        }else{
                            print("Por favor ingresa la cantidad de horas trabajadas"."<br>");
                        }
                        return $salarioNeto;
                    }
                ?>
                <h6>
                    <?php
                        echo("El salario neto a pagar es de: $".salario($_POST['horasTrabajadasSemana']));
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
