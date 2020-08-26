

PRINT ' Agrupar los clientes por ciudades, fecha de ingreso y se debe mostrar además sus nombre'

USE HiperAlmacen
GO


SELECT * FROM Clientes
SELECT NombreCli + ' ' + Apellido AS 'Nombre completo', Ciudad, FechaIng FROM Clientes
GROUP BY Ciudad, FechaIng, NombreCli, Apellido