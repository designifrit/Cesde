
/*
Crea la tabla VENTA
con las columnas idventa, idProducto,cantidad y fechaventa
se establece con CONSTRAINT la Primary key idVenta
*/

CREATE TABLE Venta(
	idVenta int,
	idProducto int,
	cantidad int,
	fechaVenta datetime,
	CONSTRAINT PK_venta PRIMARY KEY (idVenta)
)