using Modelo.TipoVehiculo;
using System;
using System.Collections.Generic;
using System.Data;
using System.Data.SqlClient;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Modelo.Vehiculo
{
    public class AccesoMetodosCRUDVehiculo
    {
        // Operación INSERT
        public int InsertVehiculo(int id, string marca, string modelo, string placa, int anio, int id_Tipo_Vehiculo)
        {
            SqlCommand _comando = MetodosCRUDVehiculo.CrearComandoProcAlmacInsert_Vehiculo();

            _comando.Parameters.AddWithValue("@id", id);
            _comando.Parameters.AddWithValue("@marca", marca);
            _comando.Parameters.AddWithValue("@modelo", modelo);
            _comando.Parameters.AddWithValue("@placa", placa);
            _comando.Parameters.AddWithValue("@anio", anio);
            _comando.Parameters.AddWithValue("@id_Tipo_Vehiculo", id_Tipo_Vehiculo);

            return MetodosCRUDVehiculo.EjecutarComandoProcAlmacInsert_Vehiculo(_comando);
        }

        // Operación SELECT
        public static DataTable ListVehiculo()
        {
            SqlCommand _comando = MetodosCRUDVehiculo.CrearComandoSelect_Vehiculo();

            _comando.CommandText = "SELECT * FROM Vehiculo";

            return MetodosCRUDVehiculo.EjecutarComandoSelect_Vehiculo(_comando);
        }

        // Operación UPDATE
        public int UpdateVehiculo(int id, string marca, string modelo, string placa, int anio, int id_Tipo_Vehiculo)
        {
            SqlCommand _comando = MetodosCRUDVehiculo.CrearComandoProcAlmacUpdate_Vehiculo();

            _comando.Parameters.AddWithValue("@id", id);
            _comando.Parameters.AddWithValue("@marca", marca);
            _comando.Parameters.AddWithValue("@modelo", modelo);
            _comando.Parameters.AddWithValue("@placa", placa);
            _comando.Parameters.AddWithValue("@anio", anio);
            _comando.Parameters.AddWithValue("@id_Tipo_Vehiculo", id_Tipo_Vehiculo);

            return MetodosCRUDVehiculo.EjecutarComandoProcAlmacUpdate_Vehiculo(_comando);
        }

        // Operación DELETE
        public int DeleteVehiculo(int id)
        {
            SqlCommand _comando = MetodosCRUDVehiculo.CrearComandoProcAlmacDelete_Vehiculo();

            _comando.Parameters.AddWithValue("@id", id);
            // No es necesario llevar el nombre

            return MetodosCRUDVehiculo.EjecutarComandoProcAlmacDelete_Vehiculo(_comando);
        }
    }
}
