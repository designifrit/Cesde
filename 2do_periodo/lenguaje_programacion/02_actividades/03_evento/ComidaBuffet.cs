
using System;

namespace _03_evento
{
    class ComidaBuffet : Evento
    {
        public string Comidas(int ServicioBuffet){

            string mensaje = "";
            
            if(ServicioBuffet == 1){
                int c = 1;
                
                while(c != 0){
                    Console.WriteLine("Por favor elija el tipo de comida para el evento (Mariscos = 1, Carnes = 2, Vegano = 3): ");
                    int eleccionComidas = int.Parse(Console.ReadLine());

                    if(eleccionComidas == 1){
                        mensaje = "Ha elegido Mariscos";
                        c = 0;
                    }else if(eleccionComidas == 2){
                        mensaje = "Ha elegido Carnes";
                        c = 0;
                    }else if(eleccionComidas == 3){
                        mensaje = "Ha elegido Vegano";
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