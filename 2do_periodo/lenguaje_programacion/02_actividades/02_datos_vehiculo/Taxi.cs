
using System;

namespace _02_datos_vehiculo{
    class Taxi : Datos_vehiculo{
        private short Banderazo{get; set;}

        public short valorPagar(short valorRecorrido){
            short totalPagar = Banderazo;

            totalPagar += valorRecorrido;

            return totalPagar;
        }
    }
}
