
PRINT '5. Sumar las ventas hechas en todas las facturas (est�n en la tabla DetalleFactura)'

USE HiperAlmacen
GO


SELECT * FROM DetalleFactura
SELECT SUM(Cantidad) AS 'Suma de las ventas realizadas' FROM DetalleFactura