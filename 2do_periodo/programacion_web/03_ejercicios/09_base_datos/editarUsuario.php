
<?php
    include("BaseDatos.php");

    // 1. Crear el objeto de la BD
    $transaccion = new BaseDatos();

    // 2. Recibir el id que necesito editar
    if(isset($_POST["botonEditar"])){

        $id = $_GET["id"];
        $nombre = $_POST["nombreEditar"];
        $descripcion = $_POST["descripcionEditar"];

        $consultarSQL = "UPDATE clientes SET nombre='$nombre', descripcion='$descripcion' WHERE id = '$id'";

        $transaccion -> actualizarDatos($consultarSQL);
    }
    
?>