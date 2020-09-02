using System;

namespace _01_introduccion_CSharp
{
    class Operaciones
    {
        public int numeroUno { get; set; } // Atributos (propiedades o variables)
        public int numeroDos { get; set; }
        // Public: modificador de acceso Global o local
        // Tipo de dato
        // Myproperty: Nombre de la propiedad
        // (get  set): Métodos para recibir


        public void nuestraSuma()   // Métodos (funciones o procedimientos)
        // modo acceso 
        // Tipo retorno
        // Nombre del método
        // (Argumentos o parámetros)
        {
            int suma = numeroUno + numeroDos;
            Console.WriteLine($"La suma del número {numeroUno} y {numeroDos} es: {suma}");
            Console.WriteLine($"La suma del número {numeroUno} y {numeroDos} es: {numeroUno + numeroDos}");
        }
    }
}