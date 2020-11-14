
<?php
    // Se enlazo el archivo base_datos.php para poder usar la clase
    include('BaseDatos.php');

    // Verifica sí dio click en enviar
    if(isset($_POST["enviar"])){
        // Recibo los datos del formulario
        $nombre = $_POST["nombre"];
        $marca = $_POST["marca"];
        $precio = $_POST["precio"];
        $descripcion = $_POST["descripcion"];

        // Comprobamos si ha ocurrido un error.
        if (!isset($_FILES["archivo"]) || $_FILES["archivo"]["error"] > 0){
            echo "Ha ocurrido un error con la imagen";
        }
        else{
            // Obtener tamaño de imagen
            $revisar = getimagesize($_FILES["archivo"]["tmp_name"]);

            // Verifica tipo
            $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");

            // Verificar
            if(in_array($_FILES['archivo']['type'], $permitidos) && $revisar !== false){

                // Archivo temporal
                $imagen_temporal = $_FILES['archivo']['tmp_name'];
                
                // Tipo de archivo
                $tipo_imagen = $_FILES['archivo']['type'];

                // Obtener imagen
                $foto = addslashes(file_get_contents($imagen_temporal));

            }else{
                echo('No se adjuntó una imagen para el producto');
            }
        }

        // Copia u objeto de la Clase baseDatos()
        $transaccion = new BaseDatos();

        // Crear consulta
        $consultaSQL = "INSERT INTO productos(nombre, marca, precio, descripcion, foto, tipo_imagen) VALUES ('$nombre', '$marca', '$precio', '$descripcion', '$foto', '$tipo_imagen')";

        // Llamo al método de la clase BD agregarDatos()
        $transaccion -> agregarDatos($consultaSQL);

        header("Location:create.php");
    }
?>