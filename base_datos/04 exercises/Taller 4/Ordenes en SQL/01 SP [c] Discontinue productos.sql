
USE HiperAlmacen
GO



SELECT * FROM Productos
GO

-- c. Descontinúe (true) los productos con código 6 y 10
CREATE PROCEDURE sp_descontinuar(
	@Descontinuado bit,
	@idProducto smallint
)AS
	IF EXISTS(SELECT * FROM Productos WHERE IdProducto = @idProducto)
	BEGIN
		UPDATE Productos SET Descontinuado = @Descontinuado WHERE IdProducto = @idProducto
		PRINT 'Se ha actualizado el estado de los productos'
	END ELSE
	BEGIN
		PRINT 'No se pudo actualizar el estado del producto, no existe el registro con ese ID'
	END
GO

EXECUTE sp_descontinuar 1, 6
EXECUTE sp_descontinuar 1, 10
GO
