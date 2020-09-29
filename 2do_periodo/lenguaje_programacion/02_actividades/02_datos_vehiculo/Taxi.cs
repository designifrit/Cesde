
using System;

namespace _02_datos_vehiculo{
    class Taxi : Datos_vehiculo{
        public short Banderazo_taxi{get; set;}

        public short valorPagar(short valorRecorrido){
            short totalPagar = Banderazo_taxi;

            totalPagar += valorRecorrido;

            return totalPagar;
        }
    }
}
