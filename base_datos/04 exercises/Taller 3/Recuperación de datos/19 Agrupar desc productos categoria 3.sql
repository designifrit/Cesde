

PRINT 'Agrupar descendentemente los productos por categor�as (mayor de 3) mostrando,
adem�s el nombre del producto'

USE HiperAlmacen
GO


SELECT * FROM Productos
SELECT IdCategoria, NombrePro AS 'Nombre del producto' FROM Productos
WHERE IdCategoria>3 GROUP BY IdCategoria, NombrePro ORDER BY IdCategoria DESC