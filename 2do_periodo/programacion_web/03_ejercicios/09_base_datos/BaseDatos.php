
<?php
    class BaseDatos{
        // Atributos
        public $usuarioBD = "root";
        public $passwordBD = "mysql";

        // Constructor
        public function __construct(){

        }

        // Métodos

        // A. Establecer conexion
        public function conectarBD(){
            
            // Intenta la conexion
            try{
                // Variable > Nombre del gestor : host o dominio; Nombre Base datos
                $datosBD = "mysql:host=localhost;dbname=bd_web1";

                // Instanciar - "PDO es una clase"
                $conexionBD = new PDO($datosBD, $this -> usuarioBD, $this -> passwordBD);

                echo("Conexión exitosa"."<br>");
                return($conexionBD);
            }
            // Sí hay un error la almacena en $error
            catch(PDOException $error){
                echo($error->getMessage());
            }
        }

        // B. Agregar datos a la BD
        public function agregarDatos($consultaSQL){
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
    }
?>
