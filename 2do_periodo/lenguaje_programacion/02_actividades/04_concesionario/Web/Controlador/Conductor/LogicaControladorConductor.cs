using Modelo.Conductor;
using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Controlador.Conductor
{
    public class LogicaControladorConductor
    {
        // Negociar INSERT
        public int NegociarInsertConductor(int id, string nombre, string tipo_licencia, int id_vehiculo, int id_tipo_conductor)
        {
            AccesoMetodosCRUDConductor negociarAcceso = new AccesoMetodosCRUDConductor();

            return negociarAcceso.InsertConductor(id, nombre, tipo_licencia, id_vehiculo, id_tipo_conductor);
        }

        // Negociar SELECT
        public static DataTable NegociarSelectConductor()
        {
            return AccesoMetodosCRUDConductor.ListConductor();
        }

        // Negociar UPDATE
        public int NegociarUpdateConductor(int id, string nombre, string tipo_licencia, int id_vehiculo, int id_tipo_conductor)
        {
            AccesoMetodosCRUDConductor negociarAcceso = new AccesoMetodosCRUDConductor();

            return negociarAcceso.UpdateConductor(id, nombre, tipo_licencia, id_vehiculo, id_tipo_conductor);
        }

        // Negociar DELETE
        public int NegociarDeleteConductor(int id)
        {
            AccesoMetodosCRUDConductor negociarAcceso = new AccesoMetodosCRUDConductor();

            return negociarAcceso.DeleteConductor(id);
        }
    }
}
