using System;
using System.Collections.Generic;
using System.Data;
using System.Data.SqlClient;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Modelo.Conductor
{
    public class MetodosCRUDConductor
    {
        // Crear tipo comando INSERT - Tipo procedimiento almacenado
        public static SqlCommand CrearComandoProcAlmacInsert_Conductor()
        {
            // Usar la conexión
            string _cadenaConexion = Configuracion.CadenaConexion;

            SqlConnection _conexion = new SqlConnection(_cadenaConexion);

            SqlCommand _comando = new SqlCommand("addConductor", _conexion);

            _comando.CommandType = CommandType.StoredProcedure;

            return _comando;
        }

        // Ejecutar tipo de comando INSERT
        public static int EjecutarComandoProcAlmacInsert_Conductor(SqlCommand comando)
        {
            try
            {
                comando.Connection.Open();

                return comando.ExecuteNonQuery();
            }
            catch { throw; }
            finally
            {
                comando.Connection.Dispose();
                comando.Connection.Close();
            }
        }

        // Crear tipo comando SELECT - Tipo Instrucción
        public static SqlCommand CrearComandoSelect_Conductor()
        {
            // Usar la conexion
            string _cadenaConexion = Configuracion.CadenaConexion;

            SqlConnection _conexion = new SqlConnection();
            _conexion.ConnectionString = _cadenaConexion;

            // Crear la instrucción SELECT
            SqlCommand _comando = new SqlCommand();
            _comando = _conexion.CreateCommand();
            _comando.CommandType = CommandType.Text;

            return _comando;
        }

        // Ejecutar tipo comando SELECT
        public static DataTable EjecutarComandoSelect_Conductor(SqlCommand comando)
        {
            DataTable _tabla = new DataTable();

            try
            {
                comando.Connection.Open();
                SqlDataAdapter adaptador = new SqlDataAdapter();
                adaptador.SelectCommand = comando;
                adaptador.Fill(_tabla);
            }
            catch (Exception excepcion) { throw excepcion; }
            finally { comando.Connection.Close(); }
            return _tabla;
        }

        // Crear tipo comando UPDATE - Tipo procedimiento almacendado
        public static SqlCommand CrearComandoProcAlmacUpdate_Conductor()
        {
            // Usar la conexión
            string _cadenaConexion = Configuracion.CadenaConexion;

            SqlConnection _conexion = new SqlConnection(_cadenaConexion);

            SqlCommand _comando = new SqlCommand("updateConductor", _conexion);

            _comando.CommandType = CommandType.StoredProcedure;

            return _comando;
        }

        // Ejecutar tipo comando UPDATE
        public static int EjecutarComandoProcAlmacUpdate_Conductor(SqlCommand comando)
        {
            try
            {
                // Abrir conexión
                comando.Connection.Open();

                return comando.ExecuteNonQuery();
            }
            catch { throw; }
            finally
            {
                comando.Connection.Dispose();
                comando.Connection.Close();
            }
        }

        // Crear tipo comando DELETE - Tipo procedimiento almacendado
        public static SqlCommand CrearComandoProcAlmacDelete_Conductor()
        {
            // Usar la conexión
            string _cadenaConexion = Configuracion.CadenaConexion;

            // Crear objeto tipo SQLConnection
            SqlConnection _conexion = new SqlConnection(_cadenaConexion);

            // Crear objeto tipo SQLCommand
            SqlCommand _comando = new SqlCommand("deleteConductor", _conexion);

            _comando.CommandType = CommandType.StoredProcedure;

            return _comando;
        }

        // Ejecutar tipo comando DELETE
        public static int EjecutarComandoProcAlmacDelete_Conductor(SqlCommand comando)
        {
            try
            {
                // Abrir conexión
                comando.Connection.Open();

                // returno ejecución del comando
                return comando.ExecuteNonQuery();
            }
            catch { throw; }
            finally
            {
                comando.Connection.Dispose();
                comando.Connection.Close();
            }
        }
    }
}
