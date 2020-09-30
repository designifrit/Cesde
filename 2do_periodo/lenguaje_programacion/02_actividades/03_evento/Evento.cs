
using System;

namespace _03_evento
{
    class Evento
    {
        // Propiedades
        public string NombreEvento{get; set;}
        int asistencia;
        public int AsistenciaEvento{
            get{
                return asistencia;
            }
            set{
                // Asigna valor del salón de acuerdo a la cantidad de asistentes
                if(value >= 1 && value < 30){
                    asistencia = 340000;
                    Console.WriteLine("Se le ha asignado el salón Familiar");
                }else if(value >= 30 && value < 70){
                    asistencia = 750000;
                    Console.WriteLine("Se le ha asignado el salón Estelar");
                }else if(value >= 60 && value < 130){
                    asistencia = 1500000;
                    Console.WriteLine("Se le ha asignado el salón Premium");
                }else if(value >= 130 && value < 500){
                    asistencia = 5500000;
                    Console.WriteLine("Se le ha asignado el salón Mega");
                }else if(value >=500){
                    asistencia = 14500000;
                    Console.WriteLine("Se le ha asignado el salón Imperial");
                }else{
                    Console.WriteLine("Ingresó un valor inválido para asistencia");
                    asistencia = 0;
                }
            }
        }
        int evento;
        public int TipoEvento{
            get{
                return evento;
            }
            set{
                // Según tipo de evento se cobra comisión para asistencia
                switch(value){
                    case 1:
                        evento = 250000;
                        break;
                    case 2:
                        evento = 350000;
                        break;
                    case 3:
                        evento = 650000;
                        break;
                    case 4:
                        evento = 1500000;
                        break;
                    case 5:
                        evento = 7500000;
                        break;
                    default:
                        Console.WriteLine("Ingresó un valor inválido para tipo de evento");
                        evento = 0;
                        break;
                }
            }
        }

        int buffet;
        public int ServicioBuffet{
            get{
                return buffet;
            }
            set{
                //Establece si el servicio es express
                switch(value){
                    case 1:
                        buffet = 550000;
                        Console.WriteLine("Ha tomado el servicio express para el buffet");
                        break;
                    case 2:
                        buffet = 1500000;
                        Console.WriteLine("No ha tomado el servicio express para el buffet");
                        break;
                    default:
                        Console.WriteLine("Ingresó un valor inválido para el Servicio de Buffet");
                        buffet = 0;
                        break;
                }
            }
        }

        //Métodos

        public int valorPagar(string nombre, int asistencia, int evento, int buffet){

            int totalPagar = asistencia + evento + buffet;
            Console.WriteLine($"El nombre del evento es: {nombre}");
            return totalPagar;
        }
    }
}