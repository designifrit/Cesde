using System;

namespace _02_datos_vehiculo
{
    class Program
    {
        static void Main(string[] args)
        {
            // Variables - Ingreso de datos
            Console.WriteLine("Bienvenido al concesionario de CHEPE");

            Console.WriteLine("Para la venta de su vehículo ingrese siguientes datos: ");

            Console.WriteLine("Nombre del dueño: ");
            string nombre = Console.ReadLine();

            Console.WriteLine("Kilometraje del vhículo (ejem: 125.000): ");
            int kilometraje = int.Parse(Console.ReadLine());

            Console.WriteLine("Modelo del vehículo: ");
            int modelo = int.Parse(Console.ReadLine());

            Console.WriteLine("Ha tenido accidentes (S/N): ");
            char accidentes = Console.ReadLine();

            Console.WriteLine("Cual es el valor de venta del vehiculo: ");
            int valor = int.Parse(Console.ReadLine());

            // Instancia
            var ingVehiculo = new Datos_vehiculo(){
                nombre_vendedor = nombre,
                kilom_vehiculo = kilometraje,
                mod_vehiculo = modelo,
                accid_vehiculo = accidentes,
                valor_vehiculo = valor
            };
            
            Console.WriteLine(ingVehiculo.mod_vehiculo);
        }
    }
}
