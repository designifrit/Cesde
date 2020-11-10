using System;
using System.Collections.Generic;
using System.Data;
using System.Data.SqlClient;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Modelo.Contrato
{
    public class AccesoMetodosCRUDContrato
    {
        // Operación INSERT
        public int InsertContrato(int id, int id_conductor, int id_vehiculo)
        {
            SqlCommand _comando = MetodosCRUDContrato.CrearComandoProcAlmacInsert_Contrato();

            _comando.Parameters.AddWithValue("@id", id);
            _comando.Parameters.AddWithValue("@id_conductor", id_conductor);
            _comando.Parameters.AddWithValue("@id_vehiculo", id_vehiculo);

            return MetodosCRUDContrato.EjecutarComandoProcAlmacInsert_Contrato(_comando);
        }

        // Operación SELECT
        public static DataTable ListContrato()
        {
            SqlCommand _comando = MetodosCRUDContrato.CrearComandoSelect_Contrato();

            _comando.CommandText = "SELECT * FROM Contrato";

            return MetodosCRUDContrato.EjecutarComandoSelect_Contrato(_comando);
        }

        // Operación UPDATE
        public int UpdateContrato(int id, int id_conductor, int id_vehiculo)
        {
            SqlCommand _comando = MetodosCRUDContrato.CrearComandoProcAlmacUpdate_Contrato();

            _comando.Parameters.AddWithValue("@id", id);
            _comando.Parameters.AddWithValue("@id_conductor", id_conductor);
            _comando.Parameters.AddWithValue("@id_vehiculo", id_vehiculo);

            return MetodosCRUDContrato.EjecutarComandoProcAlmacUpdate_Contrato(_comando);
        }

        // Operación DELETE
        public int DeleteContrato(int id)
        {
            SqlCommand _comando = MetodosCRUDContrato.CrearComandoProcAlmacDelete_Contrato();

            _comando.Parameters.AddWithValue("@id", id);
            // No es necesario llevar el nombre

            return MetodosCRUDContrato.EjecutarComandoProcAlmacDelete_Contrato(_comando);
        }
    }
}
