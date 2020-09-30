
using System;

namespace _03_acceso_y_herencias
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Animal planet!");
            Console.WriteLine("Ingresa el tipo de animal: ");
            string animalTipo = Console.ReadLine();

            Console.WriteLine("Raza del animal:");
            string razaAnimal = Console.ReadLine();

            Console.WriteLine("Edad del animal: ");
            int edadAnimal = int.Parse(Console.ReadLine());
            
            Console.WriteLine("Tipo de entrenamiento: ");
            string TE = Console.ReadLine();

            perro perro = new perro(){
                tipoAnimal = animalTipo,
                raza = razaAnimal,
                edad = edadAnimal,
            };

            gato gato = new gato(){
                tipoAnimal = animalTipo,
                raza = razaAnimal,
                edad = edadAnimal,
                reflejo = "Gatuno"
            };
            
            Console.WriteLine($"{perro.tipoAnimal}{perro.raza}{perro.edad}");
            perro.mostrarEntrenamiento(TE);
            perro.sound();

            Console.WriteLine($"{gato.tipoAnimal}{gato.raza}{gato.edad}");
            gato.sound();
        }
    }
}
