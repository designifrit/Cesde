using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Modelo
{
    public class Configuracion
    {
        static string cadenaConexion = @"Data Source=CERBERUS; Initial Catalog=Concesionario; Trusted_Connection=True";

        public static string CadenaConexion
        {
            get { return cadenaConexion; }
        }
    }
}
