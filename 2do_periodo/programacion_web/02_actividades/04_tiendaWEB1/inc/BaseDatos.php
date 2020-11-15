
<?php
    class BaseDatos{
        // ---------------------- Atributos ----------------------
        public $usuarioBD = "root";
        public $passwordBD = "mysql";

        // ---------------------- Constructor ----------------------
        public function __construct(){

        }

        // ---------------------- Métodos ----------------------

        // Establecer conexion
        public function conectarBD(){
            
            // Intenta la conexion
            try{
                // Variable > Nombre del gestor : host o dominio; Nombre Base datos
                $datosBD = "mysql:host=localhost;dbname=tiendaweb1";

                // Instanciar - "PDO es una clase"
                $conexionBD = new PDO($datosBD, $this -> usuarioBD, $this -> passwordBD);

                // echo("Conexión exitosa"."<br>");
                return($conexionBD);
            }
            // Sí hay un error la almacena en $error
            catch(PDOException $error){
                echo($error->getMessage());
            }
        }

        // C. Agregar Datos BD
        public function agregarDatos($consultaSQL){
            // 1. Establecer conexion
            $conexionBD = $this -> conectarBD();

            // 2. Preparar la consulta
            $insertarDatos = $conexionBD -> prepare($consultaSQL);

            // 3. Ejecutar la consulta
            $resultado = $insertarDatos -> execute();

            // Verifico el resultado
            if($resultado){
                header("Refresh: 3; Location:create.php");
                echo('<div class="alert alert-primary" style="position: fixed; top: 140px; left: 9px;" role="alert">'.$_SESSION['notificacion']['create'].'</div>');
            }else{
                echo("Error al agregar los registros");
            }
        }

        // R. Leer Datos BD
        public function consultarDatos($consultaSQL){
            // Establecer conexion
            $conexionBD = $this -> conectarBD();

            // Preparar consulta
            $consultarDatos = $conexionBD -> prepare($consultaSQL);

            // Establecer el método de consulta
            $consultarDatos -> setFetchMode(PDO::FETCH_ASSOC);

            // Ejecutar la operación en la BD
            $consultarDatos -> execute();

            // Retorne los datos consultados
            return($consultarDatos -> fetchAll());
        }

        // U. Actualizar Datos BD
        public function actualizarDatos($consultaSQL){
            // 1. Establecer conexion
            $conexionBD = $this -> conectarBD();

            // 2. Preparar la consulta
            $insertarDatos = $conexionBD -> prepare($consultaSQL);

            // 3. Ejecutar la consulta
            $resultado = $insertarDatos -> execute();

            // Verifico el resultado
            if($resultado){
                header("Refresh: 3; location: update.php");
                echo('<div class="alert alert-success" style="position: fixed; top: 140px; left: 9px;" role="alert">'.$_SESSION['notificacion']['update'].'</div>');
            }else{
                echo("Error al consultar los registros");
            }
        }

        // D. Eliminar Datos BD
        public function eliminarDatos($consultaSQL){
            // Establecer
            $conexionBD = $this -> conectarBD();

            // Preparar
            $eliminarDatos = $conexionBD -> prepare($consultaSQL);

            // Ejecutar
            $resultado = $eliminarDatos -> execute();

            // Verificar
            if($resultado){
                header("Refresh: 3; Location: ../delete.php");
                echo('<div class="alert alert-danger" style="position: fixed; top: 140px; left: 9px;" role="alert">'.$_SESSION['notificacion']['delete'].'</div>');
            }else{
                echo("Error al eliminar el registro");
            }
        }
    }

    session_start();

    $_SESSION['notificacion'] = array();
    $_SESSION['notificacion']['create'] = 'Se ha registrado el producto';
    $_SESSION['notificacion']['update'] = 'Se ha actualizado el producto';
    $_SESSION['notificacion']['delete'] = 'Se ha eliminado el producto';
?>

