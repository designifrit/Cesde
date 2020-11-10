using Controlador.Conductor;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace Vista
{
    public partial class gestionarConductor : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {

        }

        // Evento INSERT Conductor
        protected void btnAdd_Click(object sender, EventArgs e)
        {
            int conductorId = Int32.Parse(textId.Text);
            string nombreText = textName.Text;
            string tipoLicenciaText = TextTipoLicencia.Text;
            int vehiculoId = Int32.Parse(TextVehiculo.Text);
            int tipoConductorId = Int32.Parse(TextTipoConductor.Text);


            LogicaControladorConductor negocioAddConductor = new LogicaControladorConductor();

            int resultadoAddConductor = negocioAddConductor.NegociarInsertConductor(conductorId, nombreText, tipoLicenciaText, vehiculoId, tipoConductorId);

            if (resultadoAddConductor > 0)
            {
                labelMensaje.Text = "Registro exitoso";
            }
            else
            {
                labelMensaje.Text = "No se pudo registrar";
            }

            negocioAddConductor = null;
        }

        // Evento LIST Conductor
        protected void btnlist_Click(object sender, EventArgs e)
        {
            GridView.DataSource = LogicaControladorConductor.NegociarSelectConductor();

            // Organiza los datos en la tabla GridView
            GridView.DataBind();

            // Los campos ID y Nombre quedan vacíos después de ejecutar
            textId.Text = textName.Text = TextTipoLicencia.Text = TextVehiculo.Text = TextTipoConductor.Text = "";
        }

        // Evento UPDATE Conductor
        protected void btnUpdate_Click(object sender, EventArgs e)
        {
            int conductorId = Int32.Parse(textId.Text);
            string nombreText = textName.Text;
            string tipoLicenciaText = TextTipoLicencia.Text;
            int vehiculoId = Int32.Parse(TextVehiculo.Text);
            int tipoConductorId = Int32.Parse(TextTipoConductor.Text);

            LogicaControladorConductor negocioUpdateConductor = new LogicaControladorConductor();

            int resultadoUpdateConductor = negocioUpdateConductor.NegociarUpdateConductor(conductorId, nombreText, tipoLicenciaText, vehiculoId, tipoConductorId);

            if (resultadoUpdateConductor > 0)
            {
                labelMensaje.Text = "Actualización exitosa";
            }
            else
            {
                labelMensaje.Text = "No se pudo actualizar";
            }

            negocioUpdateConductor = null;
        }

        // Evento DELETE Conductor
        protected void btnDelete_Click(object sender, EventArgs e)
        {
            int conductorId = Int32.Parse(textId.Text);

            LogicaControladorConductor negocioDeleteConductor = new LogicaControladorConductor();

            int resultadoDeleteConductor = negocioDeleteConductor.NegociarDeleteConductor(conductorId);

            if (resultadoDeleteConductor > 0)
            {
                labelMensaje.Text = "Eliminado exitoso";
            }
            else
            {
                labelMensaje.Text = "No se pudo eliminar";
            }

            negocioDeleteConductor = null;
        }
    }
}