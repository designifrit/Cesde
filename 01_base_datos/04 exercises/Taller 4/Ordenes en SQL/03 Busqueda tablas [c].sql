
USE HiperAlmacen
GO


SELECT * FROM Productos
SELECT * FROM DetalleFactura
SELECT * FROM Facturas
GO

-- c. Muestre los productos de la categoría uno o dos (sin repetir código) que fueron vendidos durante 2018
SELECT Productos.IdCategoria, NombrePro, Facturas.FechaCompra
FROM Productos INNER JOIN DetalleFactura ON Productos.IdProducto = DetalleFactura.Idproducto INNER JOIN Facturas ON DetalleFactura.IdFactura = Facturas.IdFactura
WHERE IdCategoria = 1 OR IdCategoria = 2 AND FechaCompra >= '20180101' AND FechaCompra <= '20181231'
ORDER BY FechaCompra DESC