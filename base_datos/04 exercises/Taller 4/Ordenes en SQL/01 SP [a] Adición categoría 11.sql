
USE HiperAlmacen
GO



SELECT * FROM Categorias
GO

/* a. Adicione la categoría 11, que son Artículos de aseo */
CREATE PROCEDURE sp_adicionCategoria(
	@NombreCat varchar(40),
	@Descripcion varchar(100) = ''
)AS
	IF NOT EXISTS(SELECT * FROM Categorias WHERE NombreCat=@NombreCat)
	BEGIN
		INSERT INTO Categorias(NombreCat, Descripcion)
		VALUES(@NombreCat, @Descripcion)
		PRINT 'Se agregó el registro de manera exitosa'
	END ELSE
	BEGIN
		PRINT 'La categoria ya existe'
	END
GO

EXECUTE sp_adicionCategoria 'Aseo', 'Elementos de aseo'
GO
