
<?php
    include("BaseDatos.php");

    // 1. Crear el objeto de la BD
    $transaccion = new BaseDatos();

    $consultaSQL = "SELECT * FROM productos WHERE 1";

    $productos = $transaccion -> consultarDatos($consultaSQL);

    // 2. Recibir el id que necesito editar
    if(isset($_POST["botonEditar"])){

        $id = $_GET["id"];
        $nombre = $_POST["nombreEditar"];
        $marca = $_POST["marcaEditar"];
        $precio = $_POST["precioEditar"];
        $descripcion = $_POST["descripcionEditar"];

        //  // Comprobamos si ha ocurrido un error.
        // if (!isset($_FILES["archivoEditar"]) || $_FILES["archivoEditar"]["error"] > 0){
        //     echo "Ha ocurrido un error con la imagen";
        // }
        // else{
        //     // Obtener tamaño de imagen
        //     $revisar = getimagesize($_FILES["archivoEditar"]["tmp_name"]);

        //     // Verifica tipo
        //     $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");

        //     // Verificar
        //     if(in_array($_FILES['archivoEditar']['type'], $permitidos) && $revisar !== false){

        //         // Archivo temporal
        //         $imagen_temporal = $_FILES['archivoEditar']['tmp_name'];
                
        //         // Tipo de archivo
        //         $tipo_imagen = $_FILES['archivoEditar']['type'];

        //         // Obtener imagen
        //         $foto = addslashes(file_get_contents($imagen_temporal));

        //     }else{
        //         echo('No se adjuntó una imagen para el producto');
        //     }
        // }

        $consultarSQL = "UPDATE productos SET nombre = '$nombre', marca = '$marca', precio = '$precio', descripcion= '$descripcion' WHERE id = '$id'";

        $transaccion -> actualizarDatos($consultarSQL);
    }
?>