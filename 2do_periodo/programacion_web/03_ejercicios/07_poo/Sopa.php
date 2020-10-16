
<?php
    class Sopa{
        // Ingredientes (ATRIBUTOS - Variables)
        public $cantidadAgua;
        public $cantidadAceite;
        public $cantidadCubosSabor;

        // Constructor (Función especial)
        public function __construct(){
            
        }

        // Métodos (Acciones que puede hacer mi clase)
        public function prepararSopa(){
            echo("Revuelva los ingredientes y cocinar 20 mins");
        }

        public function disfrutarSopa(){
            echo("Deje enfriar y disfrute");
        }
    }
?>