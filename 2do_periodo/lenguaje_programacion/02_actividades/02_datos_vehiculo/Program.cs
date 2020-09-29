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

            Console.WriteLine("Marca del vehículo: ");
            string nombre = Console.ReadLine();

            Console.WriteLine("Kilometraje del vehículo (ejem: 125.000): ");
            int kilometraje = int.Parse(Console.ReadLine());

            Console.WriteLine("Modelo del vehículo: ");
            int modelo = int.Parse(Console.ReadLine());

            Console.WriteLine("Ha tenido accidentes (S/N): ");
            char accidentes = char.Parse(Console.ReadLine());

            Console.WriteLine("Cual es el valor de venta que propone para su vehiculo: ");
            int valor = int.Parse(Console.ReadLine());

            /* Console.WriteLine("Tipo de remolque: ");
            string remolque = Console.ReadLine(); */

            Console.WriteLine("Ingrese el recorrido: ");
            short banderazo = short.Parse(Console.ReadLine());

            /* Instancia
            var ingVehiculo = new Datos_vehiculo(){
                nombre_vendedor = nombre,
                kilom_vehiculo = kilometraje,
                mod_vehiculo = modelo,
                accid_vehiculo = accidentes,
                valor_vehiculo = valor
            };
            
            Console.WriteLine(ingVehiculo.marcaSerie);

            ingVehiculo.analisisVehiculo(ingVehiculo.nombre_vendedor, ingVehiculo.kilom_vehiculo, ingVehiculo.mod_vehiculo, ingVehiculo.accid_vehiculo, ingVehiculo.valor_vehiculo); */

            /* Instancia de herencia
            var ingCamion = new Camion(){
                nombre_vendedor = nombre,
                kilom_vehiculo = kilometraje,
                mod_vehiculo = modelo,
                accid_vehiculo = accidentes,
                valor_vehiculo = valor,
                tipo_remolque = remolque
            };

            Console.WriteLine($"{ingCamion.nombre_vendedor} con remolque {ingCamion.tipo_remolque}"); */

            var ingTaxi = new Taxi(){
                nombre_vendedor = nombre,
                kilom_vehiculo = kilometraje,
                mod_vehiculo = modelo,
                accid_vehiculo = accidentes,
                valor_vehiculo = valor,
                Banderazo_taxi = banderazo
            };
        }
    }
}
