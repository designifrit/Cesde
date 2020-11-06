
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    
    <?php
        include('BaseDatos.php');

        // 1. Crear el objeto de la clase BaseDatos
        $transaccion = new baseDatos();

        // 2. Definir la consulta para buscar datos
        $consultaSQL = "SELECT * FROM clientes WHERE 1";

        // 3. Ejecutar el método ConsultarDatos y almacenar respuesta en variable
        $usuarios = $transaccion -> consultarDatos($consultaSQL);

        // print_r($usuarios);
    ?>

    <main class="container">
        <div class="row row-cols-1 row-cols-md-3">
            <?php foreach($usuarios as $cliente):?>
                <div class="col mb-4">
                    <div class="card h-100">
                        <img src="images/user.png" class="card-img-top" style="width: 64px; margin: 20px 20px 0 20px;" alt="User">
                            <div class="card-body">
                            <h5 class="card-title">
                                <span><?php echo($cliente["nombre"])?></span>
                                <span class="card-title"><?php echo($cliente["apellido"])?></span>
                                <kbd class="card-title" style="text-transform: uppercase; color: white;"><?php echo($cliente["genero"])?></kbd>
                            </h5>
                            <p class="card-text"><?php echo($cliente["descripcion"])?></p>
                            <a href="eliminarUsuarios.php?id=<?php echo($cliente['id'])?>" class="btn btn-danger">Eliminar</a>
                            <a href="" class="btn btn-warning">Editar</a>
                        </div>
                    </div>
                </div>
            <?php endforeach?>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
