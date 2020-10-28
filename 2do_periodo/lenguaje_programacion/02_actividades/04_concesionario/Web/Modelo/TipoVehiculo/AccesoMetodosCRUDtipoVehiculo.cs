using System;
using System.Collections.Generic;
using System.Data;
using System.Data.SqlClient;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Modelo.TipoVehiculo
{
    public class AccesoMetodosCRUDtipoVehiculo
    {
        // Operación INSERT
        public int InsertTipoVehiculo(int id, string nombre)
        {
            SqlCommand _comando = MetodosCRUDtipoVehiculo.CrearComandoProcAlmacInsert_TipoVehiculo();

            _comando.Parameters.AddWithValue("@id", id);
            _comando.Parameters.AddWithValue("@nombre", nombre);

            return MetodosCRUDtipoVehiculo.EjecutarComandoProcAlmacInsert_TipoVehiculo(_comando);
        }

        // Operación SELECT
        public static DataTable ListTipoVehiculo()
        {
            SqlCommand _comando = MetodosCRUDtipoVehiculo.CrearComandoSelect_TipoVehiculo();

            _comando.CommandText = "SELECT * FROM Tipo_Vehiculo";

            return MetodosCRUDtipoVehiculo.EjecutarComandoSelect_TipoVehiculo(_comando);
        }

        // Operación UPDATE
        public int UpdateTipoVehiculo(int id, string nombre)
        {
            SqlCommand _comando = MetodosCRUDtipoVehiculo.CrearComandoProcAlmacUpdate_TipoVehiculo();

            _comando.Parameters.AddWithValue("@id", id);
            _comando.Parameters.AddWithValue("@nombre", nombre);

            return MetodosCRUDtipoVehiculo.EjecutarComandoProcAlmacUpdate_TipoVehiculo(_comando);
        }

        // Operación DELETE
        public int DeleteTipoVehiculo(int id)
        {
            SqlCommand _comando = MetodosCRUDtipoVehiculo.CrearComandoProcAlmacDelete_TipoVehiculo();

            _comando.Parameters.AddWithValue("@id", id);
            // No es necesario llevar el nombre

            return MetodosCRUDtipoVehiculo.EjecutarComandoProcAlmacDelete_TipoVehiculo(_comando);
        }
    }
}
