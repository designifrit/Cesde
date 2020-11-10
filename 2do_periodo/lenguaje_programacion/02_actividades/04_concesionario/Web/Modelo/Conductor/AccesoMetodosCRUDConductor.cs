using System;
using System.Collections.Generic;
using System.Data;
using System.Data.SqlClient;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Modelo.Conductor
{
    public class AccesoMetodosCRUDConductor
    {
        // Operación INSERT
        public int InsertConductor(int id, string nombre, string tipo_licencia, int id_vehiculo, int id_tipo_conductor)
        {
            SqlCommand _comando = MetodosCRUDConductor.CrearComandoProcAlmacInsert_Conductor();

            _comando.Parameters.AddWithValue("@id", id);
            _comando.Parameters.AddWithValue("@nombre", nombre);
            _comando.Parameters.AddWithValue("@tipo_licencia", tipo_licencia);
            _comando.Parameters.AddWithValue("@id_vehiculo", id_vehiculo);
            _comando.Parameters.AddWithValue("@id_tipo_conductor", id_tipo_conductor);

            return MetodosCRUDConductor.EjecutarComandoProcAlmacInsert_Conductor(_comando);
        }

        // Operación SELECT
        public static DataTable ListConductor()
        {
            SqlCommand _comando = MetodosCRUDConductor.CrearComandoSelect_Conductor();

            _comando.CommandText = "SELECT * FROM Conductor";

            return MetodosCRUDConductor.EjecutarComandoSelect_Conductor(_comando);
        }

        // Operación UPDATE
        public int UpdateConductor(int id, string nombre, string tipo_licencia, int id_vehiculo, int id_tipo_conductor)
        {
            SqlCommand _comando = MetodosCRUDConductor.CrearComandoProcAlmacUpdate_Conductor();

            _comando.Parameters.AddWithValue("@id", id);
            _comando.Parameters.AddWithValue("@nombre", nombre);
            _comando.Parameters.AddWithValue("@tipo_licencia", tipo_licencia);
            _comando.Parameters.AddWithValue("@id_vehiculo", id_vehiculo);
            _comando.Parameters.AddWithValue("@id_tipo_conductor", id_tipo_conductor);

            return MetodosCRUDConductor.EjecutarComandoProcAlmacUpdate_Conductor(_comando);
        }

        // Operación DELETE
        public int DeleteConductor(int id)
        {
            SqlCommand _comando = MetodosCRUDConductor.CrearComandoProcAlmacDelete_Conductor();

            _comando.Parameters.AddWithValue("@id", id);
            // No es necesario llevar el nombre

            return MetodosCRUDConductor.EjecutarComandoProcAlmacDelete_Conductor(_comando);
        }
    }
}
