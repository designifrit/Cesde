using System;
using System.Collections.Generic;
using System.Data;
using System.Data.SqlClient;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Modelo.TipoConductor
{
    public class AccesoMetodosCRUDtipoConductor
    {
        // Operación INSERT
        public int InsertTipoConductor(int id, string tipo_persona)
        {
            SqlCommand _comando = MetodosCRUDtipoConductor.CrearComandoProcAlmacInsert_TipoConductor();

            _comando.Parameters.AddWithValue("@id", id);
            _comando.Parameters.AddWithValue("@tipo_persona", tipo_persona);

            return MetodosCRUDtipoConductor.EjecutarComandoProcAlmacInsert_TipoConductor(_comando);
        }

        // Operación SELECT
        public static DataTable ListTipoConductor()
        {
            SqlCommand _comando = MetodosCRUDtipoConductor.CrearComandoSelect_TipoConductor();

            _comando.CommandText = "SELECT * FROM Tipo_Conductor";

            return MetodosCRUDtipoConductor.EjecutarComandoSelect_TipoConductor(_comando);
        }

        // Operación UPDATE
        public int UpdateTipoConductor(int id, string tipo_persona)
        {
            SqlCommand _comando = MetodosCRUDtipoConductor.CrearComandoProcAlmacUpdate_TipoConductor();

            _comando.Parameters.AddWithValue("@id", id);
            _comando.Parameters.AddWithValue("@tipo_persona", tipo_persona);

            return MetodosCRUDtipoConductor.EjecutarComandoProcAlmacUpdate_TipoConductor(_comando);
        }

        // Operación DELETE
        public int DeleteTipoConductor(int id)
        {
            SqlCommand _comando = MetodosCRUDtipoConductor.CrearComandoProcAlmacDelete_TipoConductor();

            _comando.Parameters.AddWithValue("@id", id);
            // No es necesario llevar el nombre

            return MetodosCRUDtipoConductor.EjecutarComandoProcAlmacDelete_TipoConductor(_comando);
        }
    }
}
