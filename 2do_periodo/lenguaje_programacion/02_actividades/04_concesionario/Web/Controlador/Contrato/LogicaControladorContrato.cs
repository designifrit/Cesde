using Modelo.Contrato;
using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Controlador.Contrato
{
    public class LogicaControladorContrato
    {
        // Negociar INSERT
        public int NegociarInsertContrato(int id, int id_conductor, int id_vehiculo)
        {
            AccesoMetodosCRUDContrato negociarAcceso = new AccesoMetodosCRUDContrato();

            return negociarAcceso.InsertContrato(id, id_conductor, id_vehiculo);
        }

        // Negociar SELECT
        public static DataTable NegociarSelectContrato()
        {
            return AccesoMetodosCRUDContrato.ListContrato();
        }

        // Negociar UPDATE
        public int NegociarUpdateContrato(int id, int id_conductor, int id_vehiculo)
        {
            AccesoMetodosCRUDContrato negociarAcceso = new AccesoMetodosCRUDContrato();

            return negociarAcceso.UpdateContrato(id, id_conductor, id_vehiculo);
        }

        // Negociar DELETE
        public int NegociarDeleteContrato(int id)
        {
            AccesoMetodosCRUDContrato negociarAcceso = new AccesoMetodosCRUDContrato();

            return negociarAcceso.DeleteContrato(id);
        }
    }
}
