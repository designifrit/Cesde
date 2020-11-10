using System;
using System.Collections.Generic;
using System.Data;
using System.Data.SqlClient;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Modelo.Vehiculo
{
    class AccesoMetodosCRUDVehiculo
    {
        // Operación INSERT
        public int InsertVehiculo(int id, string nombre)
        {
            SqlCommand _comando = MetodosCRUDVehiculo.CrearComandoProcAlmacInsert_Vehiculo();

            _comando.Parameters.AddWithValue("@id", id);
            _comando.Parameters.AddWithValue("@nombre", nombre);

            return MetodosCRUDVehiculo.EjecutarComandoProcAlmacInsert_Vehiculo(_comando);
        }

        // Operación SELECT
        public static DataTable ListVehiculo()
        {
            SqlCommand _comando = MetodosCRUDtipoVehiculo.CrearComandoSelect_TipoVehiculo();

            _comando.CommandText = "SELECT * FROM Tipo_Vehiculo";

            return MetodosCRUDtipoVehiculo.EjecutarComandoSelect_TipoVehiculo(_comando);
        }

        // Operación UPDATE
        public int UpdateVehiculo(int id, string nombre)
        {
            SqlCommand _comando = MetodosCRUDtipoVehiculo.CrearComandoProcAlmacUpdate_TipoVehiculo();

            _comando.Parameters.AddWithValue("@id", id);
            _comando.Parameters.AddWithValue("@nombre", nombre);

            return MetodosCRUDtipoVehiculo.EjecutarComandoProcAlmacUpdate_TipoVehiculo(_comando);
        }

        // Operación DELETE
        public int DeleteVehiculo(int id)
        {
            SqlCommand _comando = MetodosCRUDtipoVehiculo.CrearComandoProcAlmacDelete_TipoVehiculo();

            _comando.Parameters.AddWithValue("@id", id);
            // No es necesario llevar el nombre

            return MetodosCRUDtipoVehiculo.EjecutarComandoProcAlmacDelete_TipoVehiculo(_comando);
        }
    }
}
