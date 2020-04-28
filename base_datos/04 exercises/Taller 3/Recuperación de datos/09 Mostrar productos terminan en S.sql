

PRINT '9. Mostrar los productos que el nombre termina en “s”'

USE HiperAlmacen
GO


SELECT * FROM Productos
WHERE NombrePro LIKE '%S'