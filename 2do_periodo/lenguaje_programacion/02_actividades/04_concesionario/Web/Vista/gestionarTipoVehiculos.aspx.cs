using Controlador.TipoVehiculo;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace Vista
{
    public partial class gestionarTipoVehiculos : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {

        }

        protected void btnAdd_Click(object sender, EventArgs e)
        {
            int TipoVehiculoId = Int32.Parse(textId.Text);
            string TipoVehiculoName = textName.Text;

            LogicaControladorTipovehiculo negocioAddTipovehiculo = new LogicaControladorTipovehiculo();

            int resultadoAddTipoVehiculo = negocioAddTipovehiculo.NegociarInsertTipoVehiculo(TipoVehiculoId, TipoVehiculoName);

            if (resultadoAddTipoVehiculo > 0) {
                labelMensaje.Text = "Registro exitoso";
            } else {
                labelMensaje.Text = "No se pudo registrar";
            }

            negocioAddTipovehiculo = null;
        }
    }
}