

PRINT '4. Mostrar los datos de las facturas hechas en el mes de junio de 2018'

USE HiperAlmacen
GO


SELECT * FROM Facturas
SELECT * FROM Facturas INNER JOIN Clientes ON Facturas.IdFactura=Clientes.Identificacion
WHERE FechaCompra BETWEEN '2018-06-01' AND '2018-06-30'