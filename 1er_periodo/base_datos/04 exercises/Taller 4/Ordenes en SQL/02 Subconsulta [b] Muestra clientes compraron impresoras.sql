
USE HiperAlmacen
GO


SELECT * FROM Clientes
SELECT * FROM Facturas
SELECT * FROM DetalleFactura
SELECT * FROM Productos
GO

-- b. Muestre el nombre, apellidos de los clientes de la ciudad de Medellín que compraron impresoras
SELECT NombreCli AS 'Nombre(s)', Apellido, Ciudad FROM Clientes	WHERE Ciudad = 'Medellìn' AND Identificacion IN(SELECT Identificacion FROM Facturas WHERE IdFactura IN(SELECT IdFactura FROM DetalleFactura WHERE Idproducto IN(SELECT IdProducto FROM Productos WHERE IdCategoria = 9)))
