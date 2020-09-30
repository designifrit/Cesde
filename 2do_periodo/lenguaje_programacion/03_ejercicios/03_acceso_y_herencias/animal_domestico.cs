
using System;

namespace _03_acceso_y_herencias
{
    // Clase abstracta
    abstract class animal_domestico
    {
        //Propiedades
        public string tipoAnimal{get; set;}
        public string raza{get; set;}
        public int edad{get; set;}
        
        //Métodos
        public void comida(){
            Console.WriteLine("El animal esta comiendo");
        }

        /* Método abstracto:
            Que cambia de "forma". polimorfismo
            Solo se define su estructura
            La Class debe ser abstracta 
            Este método DEBE ser implementado en las CLASS hijas*/
        public abstract string sound();
    }
}

