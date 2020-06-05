

PRINT '8. Mostrar el menor valor'

USE HiperAlmacen
GO


SELECT * FROM Productos
SELECT TOP 1 NombrePro, Precio FROM Productos
ORDER BY Precio ASC