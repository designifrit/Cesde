

using System;

namespace _03_acceso_y_herencias
{
    class perro : animal_domestico
    {
        private string tipoEntrenamiento {get; set;}

        public void mostrarEntrenamiento(string TE){
            tipoEntrenamiento = TE;
            Console.WriteLine($"El tipo de enttrenamiento es: {tipoEntrenamiento}");
        }
        
        // Implementar el método abstracto
        public override string sound(){
                return "Guaauuu";
            }
    }
}
