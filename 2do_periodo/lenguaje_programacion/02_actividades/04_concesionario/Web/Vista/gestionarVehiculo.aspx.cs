using Controlador.Vehiculo;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace Vista
{
    public partial class gestionarVehiculo : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {

        }

        // Evento INSERT Vehículo
        protected void btnAdd_Click(object sender, EventArgs e)
        {
            int VehiculoId = Int32.Parse(textId.Text);
            string VehiculoMarca = textMarca.Text;
            string VehiculoModelo = TextModelo.Text;
            string VehiculoPlaca = TextPlaca.Text;
            int VehiculoAnio = Int32.Parse(TextAnio.Text);
            int VehiculoTipoVehiculo = Int32.Parse(TextTipoVehiculo.Text);


            LogicaControladorVehiculo negocioAddVehiculo = new LogicaControladorVehiculo();

            int resultadoAddVehiculo = negocioAddVehiculo.NegociarInsertVehiculo(VehiculoId, VehiculoMarca, VehiculoModelo, VehiculoPlaca, VehiculoAnio, VehiculoTipoVehiculo);

            if (resultadoAddVehiculo > 0)
            {
                labelMensaje.Text = "Registro exitoso";
            }
            else
            {
                labelMensaje.Text = "No se pudo registrar";
            }

            negocioAddVehiculo = null;
        }

        // Evento LIST Vehículo
        protected void btnlist_Click(object sender, EventArgs e)
        {
            GridView.DataSource = LogicaControladorVehiculo.NegociarSelectVehiculo();

            // Organiza los datos en la tabla GridView
            GridView.DataBind();

            // Los campos ID y Nombre quedan vacíos después de ejecutar
            textId.Text = textMarca.Text = TextModelo.Text = TextPlaca.Text = TextAnio.Text = TextTipoVehiculo.Text = "";
        }

        // Evento UPDATE Vehículo
        protected void btnUpdate_Click(object sender, EventArgs e)
        {
            int VehiculoId = Int32.Parse(textId.Text);
            string VehiculoMarca = textMarca.Text;
            string VehiculoModelo = TextModelo.Text;
            string VehiculoPlaca = TextPlaca.Text;
            int VehiculoAnio = Int32.Parse(TextAnio.Text);
            int VehiculoTipoVehiculo = Int32.Parse(TextTipoVehiculo.Text);

            LogicaControladorVehiculo negocioUpdateVehiculo = new LogicaControladorVehiculo();

            int resultadoUpdateVehiculo = negocioUpdateVehiculo.NegociarUpdateVehiculo(VehiculoId, VehiculoMarca, VehiculoModelo, VehiculoPlaca, VehiculoAnio, VehiculoTipoVehiculo);

            if (resultadoUpdateVehiculo > 0)
            {
                labelMensaje.Text = "Actualización exitosa";
            }
            else
            {
                labelMensaje.Text = "No se pudo actualizar";
            }

            negocioUpdateVehiculo = null;
        }

        // Evento DELETE Vehículo
        protected void btnDelete_Click(object sender, EventArgs e)
        {
            int VehiculoId = Int32.Parse(textId.Text);

            LogicaControladorVehiculo negocioDeleteVehiculo = new LogicaControladorVehiculo();

            int resultadoDeleteVehiculo = negocioDeleteVehiculo.NegociarDeleteVehiculo(VehiculoId);

            if (resultadoDeleteVehiculo > 0)
            {
                labelMensaje.Text = "Eliminado exitoso";
            }
            else
            {
                labelMensaje.Text = "No se pudo eliminar";
            }

            negocioDeleteVehiculo = null;
        }
    }
}