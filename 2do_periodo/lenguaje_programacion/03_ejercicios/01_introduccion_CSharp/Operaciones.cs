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


        public void nuestraSuma(int n1, int n2)   // Métodos (funciones o procedimientos)
        // modo acceso 
        // Tipo retorno
        // Nombre del método
        // (Argumentos o parámetros)
        {
            int suma = n1 + n2;
            Console.WriteLine($"La suma del número {n1} y {n2} es: {suma}");
            Console.WriteLine($"La suma del número {n1} y {n2} es: {n1 + n2}");
        }
    }
}
