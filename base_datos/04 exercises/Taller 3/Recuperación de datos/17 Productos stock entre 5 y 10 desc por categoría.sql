

PRINT 'Mostrar los nombres de productos, la cantidad, la categor�a de los productos donde
el stock esta entre 5 y 10 ordenados por categor�a (descendentemente)'

USE HiperAlmacen
GO


SELECT * FROM Productos
SELECT NombrePro, Cantidad, IdCategoria, CantidadStock FROM Productos
WHERE CantidadStock BETWEEN '5' AND '10' ORDER BY IdCategoria DESC