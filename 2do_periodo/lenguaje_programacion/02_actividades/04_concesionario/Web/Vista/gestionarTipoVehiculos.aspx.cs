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

        // Evento INSERT tipo vehículo
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

        // Evento LIST tipo vehículo
        protected void btnlist_Click(object sender, EventArgs e)
        {
            GridView.DataSource = LogicaControladorTipovehiculo.NegociarSelectTipoVehiculo();

            // Organiza los datos en la tabla GridView
            GridView.DataBind();

            // Los campos ID y Nombre quedan vacíos después de ejecutar
            textId.Text = textName.Text = "";
        }

        // Evento UPDATE tipo vehículo 
        protected void btnUpdate_Click(object sender, EventArgs e)
        {
            int TipoVehiculoId = Int32.Parse(textId.Text);
            string TipoVehiculoName = textName.Text;

            LogicaControladorTipovehiculo negocioUpdateTipovehiculo = new LogicaControladorTipovehiculo();

            int resultadoUpdateTipoVehiculo = negocioUpdateTipovehiculo.NegociarUpdateTipoVehiculo(TipoVehiculoId, TipoVehiculoName);

            if (resultadoUpdateTipoVehiculo > 0)
            {
                labelMensaje.Text = "Actualización exitosa";
            }
            else
            {
                labelMensaje.Text = "No se pudo actualizar";
            }

            negocioUpdateTipovehiculo = null;
        }

        protected void btnDelete_Click(object sender, EventArgs e)
        {
            int TipoVehiculoId = Int32.Parse(textId.Text);

            LogicaControladorTipovehiculo negocioDeleteTipovehiculo = new LogicaControladorTipovehiculo();

            int resultadoDeleteTipoVehiculo = negocioDeleteTipovehiculo.NegociarDeleteTipoVehiculo(TipoVehiculoId);

            if (resultadoDeleteTipoVehiculo > 0)
            {
                labelMensaje.Text = "Eliminado exitoso";
            }
            else
            {
                labelMensaje.Text = "No se pudo eliminar";
            }

            negocioDeleteTipovehiculo = null;
        }
    }
}