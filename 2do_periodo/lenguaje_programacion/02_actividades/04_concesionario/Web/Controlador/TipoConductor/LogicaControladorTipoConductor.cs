using Modelo.TipoConductor;
using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Controlador.TipoConductor
{
    public class LogicaControladorTipoConductor
    {
        // Negociar INSERT
        public int NegociarInsertTipoConductor(int id, string tipo_persona)
        {
            AccesoMetodosCRUDtipoConductor negociarAcceso = new AccesoMetodosCRUDtipoConductor();

            return negociarAcceso.InsertTipoConductor(id, tipo_persona);
        }

        // Negociar SELECT
        public static DataTable NegociarSelectTipoConductor()
        {
            return AccesoMetodosCRUDtipoConductor.ListTipoConductor();
        }

        // Negociar UPDATE
        public int NegociarUpdateTipoConductor(int id, string tipo_persona)
        {
            AccesoMetodosCRUDtipoConductor negociarAcceso = new AccesoMetodosCRUDtipoConductor();

            return negociarAcceso.UpdateTipoConductor(id, tipo_persona);
        }

        // Negociar DELETE
        public int NegociarDeleteTipoConductor(int id)
        {
            AccesoMetodosCRUDtipoConductor negociarAcceso = new AccesoMetodosCRUDtipoConductor();

            return negociarAcceso.DeleteTipoConductor(id);
        }
    }
}
