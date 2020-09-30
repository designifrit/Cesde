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
            string nomEvento = Console.ReadLine();

            Console.WriteLine("Promedio de personas que asistirán al evento: ");
            int asisEvento = int.Parse(Console.ReadLine());

            Console.WriteLine("Tipo de evento (Boda = 1, Cumpleaños = 2, Anniversario o cóctel = 3, Evento empresarial = 4, Espectáculo = 5): ");
            int tipEvento = int.Parse(Console.ReadLine());

            Console.WriteLine("Servicio de Buffet express (SI = 1/NO = 2) ");
            int servBuffet = int.Parse(Console.ReadLine());

            Evento TipoEvento = new Evento()
            {
                NombreEvento = nomEvento,
                AsistenciaEvento = asisEvento,
                TipoEvento = tipEvento,
                ServicioBuffet = servBuffet
            };
            
            ComidaBuffet objBuffet = new ComidaBuffet();
            objBuffet.Comidas(servBuffet);

            TipoEvento objDecoracion = new TipoEvento();
            objDecoracion.EventoDecoración(tipEvento);

            Console.WriteLine($"El valor total a pagar es de: ${TipoEvento.valorPagar()}");
        }
    }
}
