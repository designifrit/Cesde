

PRINT '18.  Agrupar los clientes por comunas, mostrando el nombre, apellido y comunas'

USE HiperAlmacen
GO


SELECT * FROM Clientes
SELECT Comuna, NombreCli AS 'Nombre', Apellido FROM Clientes
GROUP BY Comuna, NombreCli, Apellido