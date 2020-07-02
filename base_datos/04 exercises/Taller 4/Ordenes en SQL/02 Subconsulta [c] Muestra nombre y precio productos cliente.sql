
USE HiperAlmacen
GO


SELECT * FROM Clientes WHERE NombreCli LIKE '%laud%'
SELECT * FROM Facturas
SELECT * FROM DetalleFactura
SELECT * FROM Productos

-- c. Muestre los nombres y los precios de los productos comprados por el cliente Claudia Forero Roa
SELECT distinct(NombrePro), Precio FROM Productos WHERE IdProducto IN(SELECT Idproducto FROM DetalleFactura WHERE IdFactura IN(SELECT IdFactura FROM Facturas WHERE Identificacion IN(SELECT Identificacion FROM Clientes WHERE Identificacion = 68)))
