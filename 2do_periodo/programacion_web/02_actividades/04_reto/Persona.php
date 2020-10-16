
<?php
    class Persona{
        public $altura;
        public $color;
        public $contextura;
        public $profesion;

        public function __construct(){

        }

        public function Saludar(){
            $i = 1;
            do{
                echo ("Hola como estas");
                echo ("<br>");
                echo ("Todo bien");
            }while($i > 3);
        }
    }
?>