
USE HiperAlmacen
GO


SELECT * FROM Clientes
SELECT * FROM Facturas
GO

-- b. Muestre los clientes (identificación y nombre completo) de los clientes que compraron en los últimos 12 meses
SELECT Clientes.Identificacion, NombreCli + ' ' + Apellido AS 'Nombre completo', Facturas.FechaCompra
FROM Clientes INNER JOIN Facturas ON Clientes.Identificacion = Facturas.Identificacion
WHERE datediff(MONTH,FechaCompra,getdate()) <= 17
