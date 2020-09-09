using System;

namespace _02_hotel_huespedes
{
    class gestionHotel
    {
        // Propiedades o atributos
        public int huesped {get; set;}
        public int dias {get; set;}
        public string habitacion {get; set;}
        
        // Métodos
        public int valorEstadia(int cantHuesped, int cantDias){
            int tarifaIndividual = 2500;
            int tarifaDoble = 4600;
            int tarifaFamiliar = 5200;

            int cobro = 0;

            if(cantHuesped == 1){
                cobro = cantDias * tarifaIndividual;
            }else if(cantHuesped == 2){
                cobro = cantDias * tarifaDoble;
            }else if(cantHuesped >= 3 & cantHuesped <= 5){
                cobro = cantDias * tarifaFamiliar;
            }else{
                Console.WriteLine("Ingrese una cantidad válida para # de huéspedes");
            }

            return cobro;
        }

        public void cuentaCobro(){
            int iva = 19;
            int precioSinIva = 0;
            int precioConIva = 0;

            precioSinIva = valorEstadia(huesped, dias);
            precioConIva = ((precioSinIva * iva) / 100) + precioSinIva;

            Console.WriteLine("El valor a pagar es de: " + precioConIva);
        }
    }
}