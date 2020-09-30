// Evento

using System;

namespace _03_evento
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("--- Agencia de desarrollo de eventos ---");

            Console.WriteLine("por favor ingrese los siguientes datos para cotizar su evento: ");

            Console.WriteLine("Nombre del evento: ");
            string nomEvento = Console.WriteLine();

            Console.WriteLine("Promedio de personas que asistirán al evento: ");
            int asisEvento = int.Parse(Console.WriteLine());

            Console.WriteLine("Tipo de evento (Boda = 1, Cumpleaños = 2, Anniversario o cóctel = 3, Evento empresarial = 4, Espectáculo = 5): ");
            int tipEvento = int.Parse(Console.WriteLine());

            Console.WriteLine("Servicio de Buffet express (S/NO) ");
            int servBuffet = int.Parse(Console.WriteLine());

            Evento EventoSocial = new Evento()
            {
                NombreEvento = nomEvento,
                AsistenciaEvento = asisEvento,
                TipoEvento = tipEvento,
                ServicioBuffet = servBuffet
            };

            Console.WriteLine($"El valor a pagar es de: {EventoSocial.valorPagar()}");
        }
    }
}
