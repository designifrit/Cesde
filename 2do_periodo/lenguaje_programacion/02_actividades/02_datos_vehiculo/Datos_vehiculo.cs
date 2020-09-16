using System;

namespace _02_datos_vehiculo
{
    class Datos_vehiculo
    {
        // Propiedades
        public string nombre_vendedor{get; set;}
        public int kilom_vehiculo{get; set;}

        int Modelo;
        public int mod_vehiculo{
            get{return Modelo;}
            set{
                if(value >= 1900 && value <= 2021){
                    Modelo = value;
                }else{
                    Console.WriteLine("El número del modelo es inválido, debe de ser de 4 digitos");
                }
            }
        }

        char Accidentes;
        public char accid_vehiculo{
            get{return Accidentes;}
            set{
                switch (value){
                    case 'S':
                        Accidentes = 's';
                    break;
                    case 's':
                        Accidentes = 's';
                    break;
                    case 'N':
                        Accidentes = 'n';
                    break;
                    case 'n':
                        Accidentes = 'n';
                    break;
                    default:
                        Console.WriteLine("Ingresa S/N si el vehiculo ha estado implicado en accidentes");
                    break;
                }
            }
        }
        public int valor_vehiculo{get; set;}

        // Métodos
        public void analisisVehiculo (string nombre, int kilometraje, int modelo, char accidentes, int valor){
            double valorizacion = 0.10;
            double desvalorizacion = 0.15;
            double valorVenta = 0;

            switch(accidentes){
                case 'n':
                    if(kilom_vehiculo <= 100000) {
                        valorVenta = (valor * valorizacion) + valor;
                        if(modelo >= 2018){
                            valorVenta = (valor * valorizacion) + valor;
                            Console.WriteLine("Señor " + nombre + " su vehículo está es excelente estado, el precio de venta es de: " + valorVenta);
                        }else{
                            Console.WriteLine("Señor " + nombre + " su vehículo tiene un buen estado, el precio de venta es de: " + valorVenta);
                        }
                    }else{
                        valorVenta = (valor * desvalorizacion) - valor;
                        Console.WriteLine("Señor " + nombre + " su vehículo es antiguo, el precio de venta es de: " + valorVenta);
                    }
                    break;
                case 's':
                    Console.WriteLine("Lo sentimos Señor " + nombre + "no admitimos vehículos accidentados");
                    break;
                default:
                    Console.WriteLine("Ingresó un valor inválido para Accidentes");
                    break;
            }
        }
    }
}
