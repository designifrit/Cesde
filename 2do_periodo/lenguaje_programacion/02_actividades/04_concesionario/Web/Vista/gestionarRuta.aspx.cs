using Controlador.Ruta;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace Vista
{
    public partial class gestionarRuta : System.Web.UI.Page
    {
        // Evento INSERT Ruta
        protected void btnAdd_Click(object sender, EventArgs e)
        {
            int TipoRutaId = Int32.Parse(textId.Text);
            string TipoEstacionName = textEstacion.Text;
            int TipoVehiculoId = Int32.Parse(TextIdVehiculo.Text);

            LogicaControladorRuta negocioAddRuta = new LogicaControladorRuta();

            int resultadoAddRuta = negocioAddRuta.NegociarInsertRuta(TipoRutaId, TipoEstacionName, TipoVehiculoId);

            if (resultadoAddRuta > 0)
            {
                labelMensaje.Text = "Registro exitoso";
            }
            else
            {
                labelMensaje.Text = "No se pudo registrar";
            }

            negocioAddRuta = null;
        }

        // Evento LIST Ruta
        protected void btnlist_Click(object sender, EventArgs e)
        {
            GridView.DataSource = LogicaControladorRuta.NegociarSelectRuta();

            // Organiza los datos en la tabla GridView
            GridView.DataBind();

            // Los campos ID y Nombre quedan vacíos después de ejecutar
            textId.Text = textEstacion.Text = TextIdVehiculo.Text = "";
        }

        // Evento UPDATE Ruta
        protected void btnUpdate_Click(object sender, EventArgs e)
        {
            int TipoRutaId = Int32.Parse(textId.Text);
            string TipoEstacionName = textEstacion.Text;
            int TipoVehiculoId = Int32.Parse(TextIdVehiculo.Text);

            LogicaControladorRuta negocioUpdateRuta = new LogicaControladorRuta();

            int resultadoUpdateRuta = negocioUpdateRuta.NegociarUpdateRuta(TipoRutaId, TipoEstacionName, TipoVehiculoId);

            if (resultadoUpdateRuta > 0)
            {
                labelMensaje.Text = "Actualización exitosa";
            }
            else
            {
                labelMensaje.Text = "No se pudo actualizar";
            }

            negocioUpdateRuta = null;
        }

        // Evento DELETE Ruta
        protected void btnDelete_Click(object sender, EventArgs e)
        {
            int TipoRutaId = Int32.Parse(textId.Text);

            LogicaControladorRuta negocioDeleteRuta = new LogicaControladorRuta();

            int resultadoDeleteRuta = negocioDeleteRuta.NegociarDeleteRuta(TipoRutaId);

            if (resultadoDeleteRuta > 0)
            {
                labelMensaje.Text = "Eliminado exitoso";
            }
            else
            {
                labelMensaje.Text = "No se pudo eliminar";
            }

            negocioDeleteRuta = null;
        }
    }
}