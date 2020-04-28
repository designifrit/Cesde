

PRINT 'Cuantos productos son de la categoría 2, su precio es superior a 2000000
y hay una cantidad menor de 10 unidades'

USE HiperAlmacen
GO


SELECT IdCategoria, NombrePro, Precio, Cantidad FROM Productos
WHERE IdCategoria='2' AND Precio>='2000000' AND Cantidad<='10'