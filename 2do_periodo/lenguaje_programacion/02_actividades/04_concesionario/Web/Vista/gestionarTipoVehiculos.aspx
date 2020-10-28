<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="gestionarTipoVehiculos.aspx.cs" Inherits="Vista.gestionarTipoVehiculos" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Concesionario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet" />
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="index.html" class="navbar-brand">Concesionario</a>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="gestionarTipoVehiculos.aspx">Registro Tipo Vehiculos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Registro Vehiculos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Registro Tipo Conductor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Registro Conductor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contrato</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ruta</a>
                </li>
            </ul>
        </div>
    </nav>
    <main class="container">
        <h1>Gestión tipo de vehículo</h1>

        <form id="form1" runat="server">
            <div class="form-group">
                <label for="textBox">ID</label>
                <asp:TextBox ID="textId" runat="server" class="form-control"></asp:TextBox>
            </div>
            <div class="form-group">
                <label for="textName">Nombre</label>
                <asp:TextBox ID="textName" runat="server" class="form-control"></asp:TextBox>
            </div>
            <div class="form-row">
                <div class="col-8">
                    <asp:Button ID="btnAdd" Text="Add" runat="server" class="btn btn-primary" OnClick="btnAdd_Click"/>
                </div>
                <div class="col-4">
                    <asp:Button ID="btnlist" Text="List" runat="server" class="btn btn-primary" OnClick="btnlist_Click" />
                    <asp:Button ID="btnUpdate" Text="Update" runat="server" class="btn btn-primary" OnClick="btnUpdate_Click"/>
                    <asp:Button ID="btnDelete" Text="Delete" runat="server" class="btn btn-primary" OnClick="btnDelete_Click"/>
                </div>
            </div>
            <div class="row">
                <asp:Label ID="labelMensaje" runat="server" ForeColor="Blue" class="alert" EnableViewState="false"/>

                <br />

                <table class="table">
                    <tr>
                        <th>
                            <asp:GridView ID="GridView" runat="server" AutoGenerateColumns="false">
                                <Columns>
                                    <asp:BoundField DataField="id" HeaderText="Id"/>
                                    <asp:BoundField DataField="nombre" HeaderText="Name"/>
                                </Columns>
                            </asp:GridView>
                        </th>
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
