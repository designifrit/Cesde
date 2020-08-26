

PRINT '2. Mostrar los productos que el Stock es menor de 10'

USE HiperAlmacen
GO


SELECT * FROM Productos
SELECT NombrePro, CantidadStock FROM Productos
WHERE CantidadStock<='10' ORDER BY NombrePro ASC