
USE Concesionario
GO

CREATE TABLE Ruta(
	id int primary key,
	estacion varchar(40) not null,
	id_vehiculo int
	CONSTRAINT FK_Vehiculo_Ruta FOREIGN KEY(id_vehiculo) REFERENCES Vehiculo(id)
)
GO

SELECT * FROM Ruta
GO

CREATE PROCEDURE addRuta(
	@id int,
	@estacion varchar(40),
	@id_vehiculo int
)
AS
	INSERT INTO Ruta VALUES(@id, @estacion, @id_vehiculo)
GO

EXECUTE addRuta 1, 'Los alpes', 1




/* Creando procedimiento almacenado para Actualizar datos */
CREATE PROCEDURE updateRuta(
	@id int,
	@estacion varchar(40),
	@id_vehiculo int
)
AS
	UPDATE Ruta SET 
		[estacion] = @estacion,
		[id_vehiculo] = @id_vehiculo
		WHERE id = @id
GO

EXECUTE updateRuta 1, 'Los Alpes', 1
GO

/* Creando procedimiento almacendado para Eliminar datos */
CREATE PROCEDURE deleteRuta(
		@id int
)
AS
	DELETE FROM Ruta WHERE id = @id
GO

EXECUTE deleteRuta 3
GO