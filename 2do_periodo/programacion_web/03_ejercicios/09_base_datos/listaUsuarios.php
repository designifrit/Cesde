
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

                    <!-- Tarjeta -->
                    <div class="card h-100">
                        <img src="<?php echo($cliente["foto"])?>" class="card-img-top" style="width: 64px; margin: 20px 20px 0 20px;" alt="User">
                            <div class="card-body">
                            <h5 class="card-title">
                                <span><?php echo($cliente["nombre"])?></span>
                                <span class="card-title"><?php echo($cliente["apellido"])?></span>
                                <kbd class="card-title" style="text-transform: uppercase; color: white;"><?php echo($cliente["genero"])?></kbd>
                            </h5>
                            <p class="card-text"><?php echo($cliente["descripcion"])?></p>
                            <a href="eliminarUsuarios.php?id=<?php echo($cliente['id'])?>" class="btn btn-danger">Eliminar</a>
                            <!-- Editar -->
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar<?php echo($cliente["id"])?>">Editar</button>
                        </div>
                    </div>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="editar<?php echo($cliente["id"])?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edición de usuario</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="editarUsuario.php?id=<?php echo($cliente["id"])?>" method="POST">
                                        <div class="form-group">
                                            <label>Nombre:</label>
                                            <input type="text" class="form-control" name="nombreEditar" value="<?php echo($cliente["nombre"])?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Descripcion:</label>
                                                <textarea class="form-control" name="descripcionEditar" rows="3"><?php echo($cliente["descripcion"])?></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-warning" name="botonEditar">Enviar</button>
                                    </form>
                                </div>
                            </div>
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
