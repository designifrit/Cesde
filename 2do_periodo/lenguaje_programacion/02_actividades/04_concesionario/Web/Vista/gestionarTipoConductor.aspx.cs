using Controlador.TipoConductor;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace Vista
{
    public partial class gestionarTipoConductor : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {

        }

        // Evento INSERT tipo Conductor
        protected void btnAdd_Click(object sender, EventArgs e)
        {
            int TipoConductorId = Int32.Parse(textId.Text);
            string TipoConductorName = textName.Text;

            LogicaControladorTipoConductor negocioAddTipoConductor = new LogicaControladorTipoConductor();

            int resultadoAddTipoConductor = negocioAddTipoConductor.NegociarInsertTipoConductor(TipoConductorId, TipoConductorName);

            if (resultadoAddTipoConductor > 0)
            {
                labelMensaje.Text = "Registro exitoso";
            }
            else
            {
                labelMensaje.Text = "No se pudo registrar";
            }

            negocioAddTipoConductor = null;
        }

        // Evento LIST tipo Conductor
        protected void btnlist_Click(object sender, EventArgs e)
        {
            GridView.DataSource = LogicaControladorTipoConductor.NegociarSelectTipoConductor();

            // Organiza los datos en la tabla GridView
            GridView.DataBind();

            // Los campos ID y Nombre quedan vacíos después de ejecutar
            textId.Text = textName.Text = "";
        }

        // Evento UPDATE tipo Conductor 
        protected void btnUpdate_Click(object sender, EventArgs e)
        {
            int TipoConductorId = Int32.Parse(textId.Text);
            string TipoConductorName = textName.Text;

            LogicaControladorTipoConductor negocioUpdateTipoConductor = new LogicaControladorTipoConductor();

            int resultadoUpdateTipoConductor = negocioUpdateTipoConductor.NegociarUpdateTipoConductor(TipoConductorId, TipoConductorName);

            if (resultadoUpdateTipoConductor > 0)
            {
                labelMensaje.Text = "Actualización exitosa";
            }
            else
            {
                labelMensaje.Text = "No se pudo actualizar";
            }

            negocioUpdateTipoConductor = null;
        }

        // Evento DELETE tipo Conductor
        protected void btnDelete_Click(object sender, EventArgs e)
        {
            int TipoVehiculoId = Int32.Parse(textId.Text);

            LogicaControladorTipoConductor negocioDeleteTipoConductor = new LogicaControladorTipoConductor();

            int resultadoDeleteTipoConductor = negocioDeleteTipoConductor.NegociarDeleteTipoConductor(TipoVehiculoId);

            if (resultadoDeleteTipoConductor > 0)
            {
                labelMensaje.Text = "Eliminado exitoso";
            }
            else
            {
                labelMensaje.Text = "No se pudo eliminar";
            }

            negocioDeleteTipoConductor = null;
        }
    }
}





