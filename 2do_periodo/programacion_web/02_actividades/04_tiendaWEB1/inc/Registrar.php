
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
        $foto = $_POST["archivo"];

        // echo($nombre.$apellido.$descripcion.$genero);

        // Copia u objeto de la Clase baseDatos()
        $transaccion = new BaseDatos();

        // $transaccion -> conectarBD();

        // Crear consulta
        $consultaSQL = "INSERT INTO productos(nombre, marca, precio, descripcion, foto) VALUES ('$nombre', '$marca', '$precio', '$descripcion', '$foto')";

        // Llamo al método de la clase BD agregarDatos()
        $transaccion -> agregarDatos($consultaSQL);
    }
?>