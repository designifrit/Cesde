
USE HiperAlmacen
GO


SELECT * FROM Productos
GO

-- d. Imprimir el promedio del IVA de todos los productos de categoría 5
CREATE PROCEDURE sp_promedioProductos(
	@idCategoria smallint
)AS
	IF EXISTS(SELECT IdCategoria, NombrePro, Iva FROM Productos WHERE IdCategoria = @idCategoria)
	BEGIN
		DECLARE @promIva smallint
		SET @promIva = (SELECT AVG(Iva) FROM Productos)
		PRINT 'El promedio del IVA para la categoria ' + CONVERT(varchar(10), @idCategoria) + ' es: ' + CONVERT(varchar(10), @promIva)
	END ELSE
	BEGIN
		PRINT 'No fue posible realizar el promedio, no existe la categoria'
	END
GO

EXECUTE sp_promedioProductos 5
GO