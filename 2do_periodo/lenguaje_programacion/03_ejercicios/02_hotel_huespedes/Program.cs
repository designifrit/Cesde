using System; // Usando libreria genérica

namespace _02_hotel_huespedes // Nombre de la carpeta
{
    class Program // Nombre del archivo
    {
        static void Main(string[] args)
        {
            // Variables
            Console.WriteLine("Hotel WCG!");

            Console.WriteLine("Cantidad de huespedes");
            int huespedes = int.Parse(Console.ReadLine());

            Console.WriteLine("Días de hospedaje");
            int cant_dias = int.Parse(Console.ReadLine());

            Console.WriteLine("Nombre habitación");
            string nom_habitacion = Console.ReadLine();

            // Instancia
            var hoteluno = new gestionHotel(){
                huesped = huespedes,
                dias = cant_dias,
                habitacion = nom_habitacion
            };

            hoteluno.cuentaCobro();
        }
    }
}
