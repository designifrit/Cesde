using System;
using System.Collections.Generic;
using System.Data;
using System.Data.SqlClient;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Modelo.Ruta
{
    public class AccesoMetodosCRUDRuta
    {
        // Operación INSERT
        public int InsertRuta(int id, string estacion, int id_vehiculo)
        {
            SqlCommand _comando = MetodosCRUDRuta.CrearComandoProcAlmacInsert_Ruta();

            _comando.Parameters.AddWithValue("@id", id);
            _comando.Parameters.AddWithValue("@estacion", estacion);
            _comando.Parameters.AddWithValue("@id_vehiculo", id_vehiculo);

            return MetodosCRUDRuta.EjecutarComandoProcAlmacInsert_Ruta(_comando);
        }

        // Operación SELECT
        public static DataTable ListRuta()
        {
            SqlCommand _comando = MetodosCRUDRuta.CrearComandoSelect_Ruta();

            _comando.CommandText = "SELECT * FROM Ruta";

            return MetodosCRUDRuta.EjecutarComandoSelect_Ruta(_comando);
        }

        // Operación UPDATE
        public int UpdateRuta(int id, string estacion, int id_vehiculo)
        {
            SqlCommand _comando = MetodosCRUDRuta.CrearComandoProcAlmacUpdate_Ruta();

            _comando.Parameters.AddWithValue("@id", id);
            _comando.Parameters.AddWithValue("@estacion", estacion);
            _comando.Parameters.AddWithValue("@id_vehiculo", id_vehiculo);

            return MetodosCRUDRuta.EjecutarComandoProcAlmacUpdate_Ruta(_comando);
        }

        // Operación DELETE
        public int DeleteRuta(int id)
        {
            SqlCommand _comando = MetodosCRUDRuta.CrearComandoProcAlmacDelete_Ruta();

            _comando.Parameters.AddWithValue("@id", id);
            // No es necesario llevar el nombre

            return MetodosCRUDRuta.EjecutarComandoProcAlmacDelete_Ruta(_comando);
        }
    }
}
