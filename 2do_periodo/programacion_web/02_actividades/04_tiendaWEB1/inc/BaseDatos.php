
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
                echo("Producto agregado");
            }else{
                echo("error");
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
                echo("usuario agregado");
            }else{
                echo("error");
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
                echo("Producto eliminado");
            }else{
                echo("Error");
            }
        }
    }
?>