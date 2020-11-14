
<?php
    // Se enlazo el archivo base_datos.php para poder usar la clase
    include('BaseDatos.php');

    // Verifica sí dio click en enviar
    if(isset($_POST["botonEnvio"])){
        // Recibo los datos del formulario
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $descripcion = $_POST["descripcion"];
        $genero = $_POST["genero"];
        $foto = $_POST["foto"];

        // echo($nombre.$apellido.$descripcion.$genero);

        // Copia u objeto de la Clase baseDatos()
        $transaccion = new BaseDatos();

        // $transaccion -> conectarBD();

        // Crear consulta
        $consultaSQL = "INSERT INTO clientes(nombre, apellido, descripcion, genero, foto) VALUES ('$nombre', '$apellido', '$descripcion', '$genero', '$foto')";

        // Llamo al método de la clase BD agregarDatos()
        $transaccion -> agregarDatos($consultaSQL);

        // Redireccionar
        header("location: formulario.php");
    }
?>
