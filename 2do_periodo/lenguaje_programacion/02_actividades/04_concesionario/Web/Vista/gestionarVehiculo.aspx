<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="gestionarVehiculo.aspx.cs" Inherits="Vista.gestionarVehiculo" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Concesionario / Vehículo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora&family=Roboto&display=swap" rel="stylesheet">
    <link href="styles.css" rel="stylesheet" />
</head>
<body>
    
    <!-- ######################### NAV ######################### -->

    <nav id="nav">
        <div>
            <div id="nav_menu" class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">Concesionario</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                        <li class="nav-item active"><a class="nav-link" href="gestionarVehiculo.aspx">Vehículo</a></li>
                        <li class="nav-item"><a class="nav-link" href="gestionarTipoVehiculos.aspx">Tipo de vehículo</a></li>
                        <li class="nav-item"><a class="nav-link" href="gestionarConductor.aspx">Conductor</a></li>
                        <li class="nav-item"><a class="nav-link" href="gestionarTipoConductor.aspx">Tipo de conductor</a></li>
                        <li class="nav-item"><a class="nav-link" href="gestionarRuta.aspx">Ruta</a></li>
                        <li class="nav-item"><a class="nav-link" href="gestionarContrato.aspx">Contrato</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- ######################### FORMULARIO ######################### -->

    <main class="container">
        <h1>Vehículo</h1>

        <form id="form2" runat="server">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="textId">ID</label>
                    <asp:TextBox ID="textId" runat="server" class="form-control"></asp:TextBox>
                </div>
                <div class="form-group col-md-4">
                    <label for="textMarca">Marca</label>
                    <asp:TextBox ID="textMarca" runat="server" class="form-control"></asp:TextBox>
                </div>
                <div class="form-group col-md-4">
                    <label for="TextModelo">Modelo</label>
                    <asp:TextBox ID="TextModelo" runat="server" class="form-control"></asp:TextBox>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="TextPlaca">Placa</label>
                    <asp:TextBox ID="TextPlaca" runat="server" class="form-control"></asp:TextBox>
                </div>
                <div class="form-group col-md-4">
                    <label for="TextAnio">Año</label>
                    <asp:TextBox ID="TextAnio" runat="server" class="form-control"></asp:TextBox>
                </div>
                <div class="form-group col-md-4">
                    <label for="TextTipoVehiculo">ID Tipo de vehículo</label>
                    <asp:TextBox ID="TextTipoVehiculo" runat="server" class="form-control"></asp:TextBox>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-8">

                    <!-- *************** C *************** -->
                    <asp:Button ID="btnAdd" Text="Add" runat="server" class="btn btn-primary" OnClick="btnAdd_Click"/>
                </div>
                <div class="form-group col-md-4">

                    <!-- *************** R.U.D *************** -->
                    <asp:Button ID="btnlist" Text="List" runat="server" class="btn btn-secondary" OnClick="btnlist_Click"/>
                    <asp:Button ID="btnUpdate" Text="Update" runat="server" class="btn btn-secondary" OnClick="btnUpdate_Click" />
                    <asp:Button ID="btnDelete" Text="Delete" runat="server" class="btn btn-danger" OnClick="btnDelete_Click" />
                </div>
            </div>

            <!-- ######################### READ ######################### -->

            <div class="row">
                <asp:Label ID="labelMensaje" runat="server" ForeColor="Blue" class="alert" EnableViewState="false"/><br />

                <table class="table table-borderless">
                    <tr>
                        <td scope="col">
                            <asp:GridView ID="GridView" runat="server" AutoGenerateColumns="false">
                                <Columns>
                                    <asp:BoundField DataField="id" HeaderText="Id"/>
                                    <asp:BoundField DataField="marca" HeaderText="Marca"/>
                                    <asp:BoundField DataField="modelo" HeaderText="Modelo"/>
                                    <asp:BoundField DataField="placa" HeaderText="Placa"/>
                                    <asp:BoundField DataField="anio" HeaderText="Año"/>
                                    <asp:BoundField DataField="id_Tipo_Vehiculo" HeaderText="ID Tipo Vehiculo"/>
                                </Columns>
                            </asp:GridView>
                        </td>
                    </tr>
                </table>
            </div>

        </form>
    </main>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
