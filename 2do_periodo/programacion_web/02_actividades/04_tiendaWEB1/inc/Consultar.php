
<?php
    include('BaseDatos.php');

    // 1. Crear el objeto de la clase BaseDatos
    $transaccion = new baseDatos();

    // 2. Definir la consulta para buscar datos
    $consultaSQL = "SELECT * FROM productos WHERE 1";

    //Mostrar Imagen 
    

    // 3. Ejecutar el m├ętodo ConsultarDatos y almacenar respuesta en variable
    $productos = $transaccion -> consultarDatos($consultaSQL);

    // print_r($usuarios);
?>
