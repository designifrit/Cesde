
PRINT '1. Mostrar los clientes con fecha de ingreso mayor del 30 de junio de 2018'

USE HiperAlmacen
GO


SELECT * FROM Clientes
SELECT FechaIng AS 'Fecha de ingreso', NombreCli + ' ' + Apellido AS 'Nombre completo' FROM Clientes
WHERE FechaIng>='2018-06-30' ORDER BY FechaIng DESC