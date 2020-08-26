

USE HiperAlmacen
GO



SELECT * FROM Productos
GO

-- b. Modifique la cantidad (nueva cantidad 100) y se le sume 10000 al precio de los productos de la categoría 2
CREATE PROCEDURE sp_modificaCantidadPrecio(
	@Precio int,
	@Cantidad smallint,
	@Categoria smallint
)AS
	IF EXISTS(SELECT * FROM Productos WHERE IdCategoria = @Categoria)
	BEGIN
		UPDATE Productos SET Precio = Precio + @Precio
		UPDATE Productos SET Cantidad = @Cantidad
		PRINT 'Se ha modificado la Cantidad y el precio'
	END ELSE
	BEGIN
		PRINT 'No se pudo realizar la modifciación de registros'
	END
GO

EXECUTE sp_modificaCantidadPrecio 10000, 100, 2
GO
