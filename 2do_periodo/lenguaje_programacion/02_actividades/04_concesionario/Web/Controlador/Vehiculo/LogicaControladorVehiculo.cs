using Modelo.Vehiculo;
using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Controlador.Vehiculo
{
    public class LogicaControladorVehiculo
    {
        // Negociar INSERT
        public int NegociarInsertVehiculo(int id, string marca, string modelo, string placa, int anio, int id_Tipo_Vehiculo)
        {
            AccesoMetodosCRUDVehiculo negociarAcceso = new AccesoMetodosCRUDVehiculo();

            return negociarAcceso.InsertVehiculo(id, marca, modelo, placa, anio, id_Tipo_Vehiculo);
        }

        // Negociar SELECT
        public static DataTable NegociarSelectVehiculo()
        {
            return AccesoMetodosCRUDVehiculo.ListVehiculo();
        }

        // Negociar UPDATE
        public int NegociarUpdateVehiculo(int id, string marca, string modelo, string placa, int anio, int id_Tipo_Vehiculo)
        {
            AccesoMetodosCRUDVehiculo negociarAcceso = new AccesoMetodosCRUDVehiculo();

            return negociarAcceso.UpdateVehiculo(id, marca, modelo, placa, anio, id_Tipo_Vehiculo);
        }

        // Negociar DELETE
        public int NegociarDeleteVehiculo(int id)
        {
            AccesoMetodosCRUDVehiculo negociarAcceso = new AccesoMetodosCRUDVehiculo();

            return negociarAcceso.DeleteVehiculo(id);
        }
    }
}

