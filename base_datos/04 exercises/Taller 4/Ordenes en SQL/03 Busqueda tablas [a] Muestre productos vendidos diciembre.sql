
USE HiperAlmacen
GO


SELECT * FROM Productos
SELECT * FROM DetalleFactura
SELECT * FROM Facturas
GO

-- a. Muestre los productos de la categoría 4 que se vendieron en el mes de diciembre de 2018

-- Con subconsulta
SELECT NombrePro, IdCategoria FROM Productos WHERE IdProducto IN (SELECT IdProducto FROM DetalleFactura WHERE IdFactura IN (SELECT IdFactura FROM Facturas WHERE FechaCompra >= '2018-12-01' and FechaCompra <= '2018-12-31'))

-- Con INNER JOIN
SELECT Productos.IdProducto, IdCategoria, NombrePro, Precio, Facturas.FechaCompra
FROM Productos INNER JOIN DetalleFactura ON Productos.IdProducto=DetalleFactura.Idproducto INNER JOIN Facturas ON DetalleFactura.IdFactura=Facturas.IdFactura
WHERE IdCategoria = 4 AND FechaCompra >= '2018-12-01' and FechaCompra <= '2018-12-31'
