using Modelo.TipoVehiculo;
using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Controlador.TipoVehiculo
{
    public class LogicaControladorTipovehiculo
    {
        // Negociar INSERT
        public int NegociarInsertTipoVehiculo(int id, string name)
        {
            AccesoMetodosCRUDtipoVehiculo negociarAcceso = new AccesoMetodosCRUDtipoVehiculo();

            return negociarAcceso.InsertTipoVehiculo(id, name);
        }

        // Negociar SELECT
        public static DataTable NegociarSelectTipoVehiculo()
        {
            return AccesoMetodosCRUDtipoVehiculo.ListTipoVehiculo();
        }

        // Negociar UPDATE
        public int NegociarUpdateTipoVehiculo(int id, string name)
        {
            AccesoMetodosCRUDtipoVehiculo negociarAcceso = new AccesoMetodosCRUDtipoVehiculo();

            return negociarAcceso.UpdateTipoVehiculo(id, name);
        }

        // Negociar DELETE
        public int NegociarDeleteTipoVehiculo(int id)
        {
            AccesoMetodosCRUDtipoVehiculo negociarAcceso = new AccesoMetodosCRUDtipoVehiculo();

            return negociarAcceso.DeleteTipoVehiculo(id);
        }
    }
}
