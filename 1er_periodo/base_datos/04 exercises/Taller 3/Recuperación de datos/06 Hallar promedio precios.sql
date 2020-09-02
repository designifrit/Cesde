

PRINT '6. Hallar promedio de precios de la categoría 1'

USE HiperAlmacen
GO

SELECT * FROM Categorias INNER JOIN Productos ON Categorias.IdCategoria=Productos.IdProducto
SELECT AVG(Precio) AS 'Promedio de precios' FROM Productos
WHERE IdCategoria='1'