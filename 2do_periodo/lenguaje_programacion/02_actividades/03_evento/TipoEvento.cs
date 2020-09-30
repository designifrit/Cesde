
using System;

namespace _03_evento
{
    class TipoEvento : Evento
    {
        public string EventoDecoración(int TipoEvento){

            string mensaje = "";

            if(TipoEvento != 0){
                int c = 1;
                while(c != 0){
                    Console.WriteLine("Por favor elija los colores para la decoración del salón (Rojo y blanco = 1, morado y blanco = 2, azul y blanco = 3): ");
                    int eleccionDecoracion = int.Parse(Console.ReadLine());

                    if(eleccionDecoracion == 1){
                        mensaje = "Decoración con color rojo y blanco";
                        c = 0;
                    }else if(eleccionDecoracion == 2){
                        mensaje = "Decoración con color morado y blanco";
                        c = 0;
                    }else if(eleccionDecoracion == 3){
                        mensaje = "Decoración con color azul y blanco";
                        c = 0;
                    }else{
                        Console.WriteLine("No eligió una opción válida");
                        c = 1;
                    }
                }
            }
            return mensaje;
        }
    }
}