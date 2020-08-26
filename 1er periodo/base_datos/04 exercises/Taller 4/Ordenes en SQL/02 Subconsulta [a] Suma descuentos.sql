
USE HiperAlmacen
GO


SELECT * FROM Productos
SELECT * FROM DetalleFactura
GO

-- a. Sume todos los descuentos de los productos que se vendieron de la categoría con nombre cocina (3)
ALTER PROCEDURE sp_sumaDescuentos(
	@IdCategoria int
)AS
	IF EXISTS(SELECT * FROM Categorias WHERE IdCategoria = @IdCategoria)
	BEGIN
		DECLARE @sumaDescuentos int
		SET @sumaDescuentos =  (SELECT SUM(Descuento) AS 'Suma descuentos' FROM DetalleFactura WHERE Idproducto IN(SELECT IdProducto FROM Productos WHERE IdCategoria = @IdCategoria))
		PRINT 'La suma de los descuentos de los productos que se vendieron de la categoría con nombre cocina es de: ' + CONVERT(varchar(10), @sumaDescuentos)
	END ELSE
	BEGIN
		PRINT 'No se pudo realizar la suma de descuentos, no existe la categoria ingresada'
	END
GO

EXECUTE sp_sumaDescuentos 3
GO
