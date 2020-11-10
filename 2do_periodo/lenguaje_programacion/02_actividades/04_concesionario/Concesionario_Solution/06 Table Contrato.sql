
USE Concesionario
GO

CREATE TABLE Contrato(
	id int primary key,
	id_conductor int not null,
	id_vehiculo int not null,
	CONSTRAINT FK_Conductor_Contrato FOREIGN KEY(id_conductor) REFERENCES Conductor(id),
	CONSTRAINT FK_Vehiculo_Contrato FOREIGN KEY(id_vehiculo) REFERENCES Vehiculo(id)
)
GO

SELECT * FROM Contrato
GO

CREATE PROCEDURE addContrato(
	@id int,
	@id_conductor int,
	@id_vehiculo int
)
AS
	INSERT INTO Contrato VALUES(@id, @id_conductor, @id_vehiculo)
GO

EXECUTE addContrato 1, 1, 1



/* Creando procedimiento almacenado para Actualizar datos */
CREATE PROCEDURE updateContrato(
	@id int,
	@id_conductor int,
	@id_vehiculo int
)
AS
	UPDATE Contrato SET 
		[id_conductor] = @id_conductor,
		[id_vehiculo] = @id_vehiculo
		WHERE id = @id
GO

EXECUTE updateContrato 1, 1, 1
GO

/* Creando procedimiento almacendado para Eliminar datos */
CREATE PROCEDURE deleteContrato(
		@id int
)
AS
	DELETE FROM Contrato WHERE id = @id
GO

EXECUTE deleteContrato 3
GO