using Modelo.TipoVehiculo;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Controlador.TipoVehiculo
{
    public class LogicaControladorTipovehiculo
    {
        // Negociar INSERT
        public int NegociarInsertTipoVehiculo(int id, string name)
        {
            AccesoMetodosCRUDtipoVehiculo negociarAcceso = new AccesoMetodosCRUDtipoVehiculo();

            return negociarAcceso.InsertTipoVehiculo(id, name);
        }
    }
}
