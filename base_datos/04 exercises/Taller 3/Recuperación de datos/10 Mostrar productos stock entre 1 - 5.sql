

PRINT '10. Mostrar los nombres y el stock de los productos que el stock que están entre 1 y 5 unidades'

USE HiperAlmacen
GO

SELECT * FROM Productos
SELECT NombrePro, CantidadStock FROM Productos
WHERE CantidadStock BETWEEN '1' AND '5'