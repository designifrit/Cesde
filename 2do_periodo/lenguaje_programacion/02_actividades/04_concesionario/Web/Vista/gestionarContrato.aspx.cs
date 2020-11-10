using Controlador.Contrato;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace Vista
{
    public partial class gestionarContrato : System.Web.UI.Page
    {
        // Evento INSERT Contrato
        protected void btnAdd_Click(object sender, EventArgs e)
        {
            int TipoContratoId = Int32.Parse(textId.Text);
            int TipoVehiculoId = Int32.Parse(textVehiculo.Text);
            int TipoTipoVehiculoId = Int32.Parse(TextTipoVehiculo.Text);

            LogicaControladorContrato negocioAddContrato = new LogicaControladorContrato();

            int resultadoAddContrato = negocioAddContrato.NegociarInsertContrato(TipoContratoId, TipoVehiculoId, TipoTipoVehiculoId);

            if (resultadoAddContrato > 0)
            {
                labelMensaje.Text = "Registro exitoso";
            }
            else
            {
                labelMensaje.Text = "No se pudo registrar";
            }

            negocioAddContrato = null;
        }

        // Evento LIST Contrato
        protected void btnlist_Click(object sender, EventArgs e)
        {
            GridView.DataSource = LogicaControladorContrato.NegociarSelectContrato();

            // Organiza los datos en la tabla GridView
            GridView.DataBind();

            // Los campos ID y Nombre quedan vacíos después de ejecutar
            textId.Text = textVehiculo.Text = TextTipoVehiculo.Text = "";
        }

        // Evento UPDATE Contrato
        protected void btnUpdate_Click(object sender, EventArgs e)
        {
            int TipoContratoId = Int32.Parse(textId.Text);
            int TipoVehiculoId = Int32.Parse(textVehiculo.Text);
            int TipoTipoVehiculoId = Int32.Parse(TextTipoVehiculo.Text);

            LogicaControladorContrato negocioUpdateContrato = new LogicaControladorContrato();

            int resultadoUpdateContrato = negocioUpdateContrato.NegociarUpdateContrato(TipoContratoId, TipoVehiculoId, TipoTipoVehiculoId);

            if (resultadoUpdateContrato > 0)
            {
                labelMensaje.Text = "Actualización exitosa";
            }
            else
            {
                labelMensaje.Text = "No se pudo actualizar";
            }

            negocioUpdateContrato = null;
        }

        // Evento DELETE Contrato
        protected void btnDelete_Click(object sender, EventArgs e)
        {
            int TipoContratoId = Int32.Parse(textId.Text);

            LogicaControladorContrato negocioDeleteContrato = new LogicaControladorContrato();

            int resultadoDeleteContrato = negocioDeleteContrato.NegociarDeleteContrato(TipoContratoId);

            if (resultadoDeleteContrato > 0)
            {
                labelMensaje.Text = "Eliminado exitoso";
            }
            else
            {
                labelMensaje.Text = "No se pudo eliminar";
            }

            negocioDeleteContrato = null;
        }
    }
}