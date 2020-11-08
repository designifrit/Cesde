
<?php
    include("BaseDatos.php");

    // 1. Recibir ID a eliminar en BD por la URL(GET)
    $idEliminar = ($_GET["id"]);

    // 2. Crear objeto de BaseDatos
    $transaccion = new BaseDatos();

    // 3. Crear consulta SQL para eliminar
    $consultaSQL = "DELETE FROM clientes WHERE id = '$idEliminar'";

    // 4. LLamar m├ętodo para eliminar datos
    $transaccion -> eliminarDatos($consultaSQL);
?>