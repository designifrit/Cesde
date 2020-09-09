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

            /* Crear instancia (objeto) */
            // Class
            // Objeto (instancia)
            // Crear
            // Constructor

            // También se puede de esta forma > Operaciones myOperacion = new Operaciones()
            var myOperacion = new Operaciones(){
                numeroUno = numUno,
                numeroDos = numDos
            };

            // Verificar el valor almacenado en el constructor
            Console.WriteLine(myOperacion.numeroUno);

            // Llevar el valor como parámetro a un método
            // Llamar método class mediante el objeto (instancia)
            myOperacion.nuestraSuma(myOperacion.numeroUno, myOperacion.numeroDos);

        }
    }
}

/* Programación orientada a objetos
    1. La programación orientada a objetos difiere de la programación estructurada tradicional
    2. primero definen objetos para luego enviarles mensajes solicitándoles que realicen sus métodos por sí mismos.
    3. Instanciar Class
*/