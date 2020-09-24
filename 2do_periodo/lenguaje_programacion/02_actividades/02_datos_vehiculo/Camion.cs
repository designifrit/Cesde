using System;

namespace _02_datos_vehiculo{

    // Propiedad con herencia
    class Camion : Datos_vehiculo{
        string tipoRemolque;
        public string tipo_remolque{
            get{ return tipoRemolque;}
            set{
                if(value == "estacas"){
                    tipoRemolque = value;
                }else if(value == "contenedor"){
                    tipoRemolque = value;
                }else if(value == "cama baja"){
                    tipoRemolque = value;
                }else if(value == "sisterna"){
                    tipoRemolque = value;
                }else if(value == "planchon"){
                    tipoRemolque = value;
                }else{
                    Console.WriteLine("Ingreso un tipo de remolque inválido");
                }
            }
        }
    }
}
