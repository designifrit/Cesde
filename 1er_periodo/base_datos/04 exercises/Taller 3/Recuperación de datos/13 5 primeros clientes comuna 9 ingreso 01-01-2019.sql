

PRINT 'Mostrar los 5 primeros clientes de la comuna 9 que su fecha de ingreso fue después del 1 de enero de 2019'

USE HiperAlmacen
GO


SELECT * FROM Clientes
SELECT NombreCli + ' ' + Apellido, Comuna, FechaIng FROM Clientes
WHERE FechaIng>='2019-01-01'