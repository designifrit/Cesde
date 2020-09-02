using System; // Usando una librería genérica

namespace _01_introduccion_CSharp // Espacio de nombre (Carpeta del proyecto)
{
    class Program // El programa donde estoy codificando alguna funcionalidad (Es como un molde o plantilla)
    {
        // Atributos (propiedades o variables)
        // Color, marca, placa, modelo, etc.

        // Métodos (funciones o procedimientos)
        // Arrancar, acelerar, frenar, etc
        static void Main(string[] args)
        {
            // Instrucciones, pasos, tareas, etc
            Console.WriteLine("Hello World!"); 
            
            Console.WriteLine("Primer número");
            int numUno = int.Parse(Console.ReadLine()); // Convertir STRING en dato númerico

            Console.WriteLine("Segundo número");
            int numDos = int.Parse(Console.ReadLine());

            Console.WriteLine("El número es: " + numUno); // Concatenar
            Console.WriteLine($"El número es: {numUno}"); // Concatenar con literal string
        }
    }
}


/* Programación orientada a objetos
    1. 
    2. Instanciar la clase
*/