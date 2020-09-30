
using System;

namespace _03_acceso_y_herencias
{
    class gato : animal_domestico
    {
        public string reflejo {get; set;}

        // Implementar el método abstracto
        public override string sound(){
            return "Miaauuu";
        }
    }
}
