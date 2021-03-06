
USE Concesionario
GO

CREATE TABLE Conductor(
	id int primary key,
	nombre varchar(40) not null,
	tipo_licencia varchar(8) unique,
	id_vehiculo int not null,
	id_tipo_conductor int not null
	CONSTRAINT FK_Vehiculo FOREIGN KEY(id_vehiculo) REFERENCES Vehiculo(id),
	CONSTRAINT FK_Tipo_Conductor FOREIGN KEY(id_tipo_conductor) REFERENCES Tipo_Conductor(id)
)
GO

SELECT * FROM Conductor
GO

CREATE PROCEDURE addConductor(
	@id int,
	@nombre varchar(40),
	@tipo_licencia varchar(8),
	@id_vehiculo int,
	@id_tipo_conductor int
)
AS
	INSERT INTO Conductor VALUES(@id, @nombre, @tipo_licencia, @id_vehiculo, @id_tipo_conductor)
GO

EXECUTE addConductor 1, 'Alejandro Orozco', 'Clase A1', 1, 1


/* Creando procedimiento almacenado para Actualizar datos */
CREATE PROCEDURE updateConductor(
	@id int,
	@nombre varchar(40),
	@tipo_licencia varchar(8),
	@id_vehiculo int,
	@id_tipo_conductor int
)
AS
	UPDATE Conductor SET 
		[nombre] = @nombre,
		[tipo_licencia] = @tipo_licencia,
		[id_vehiculo] = @id_vehiculo,
		[id_tipo_conductor] = @id_tipo_conductor
		WHERE id = @id
GO

EXECUTE updateConductor 2, 'Camilo', 'A2', 1, 1
GO

/* Creando procedimiento almacendado para Eliminar datos */
CREATE PROCEDURE deleteConductor(
		@id int
)
AS
	DELETE FROM Conductor WHERE id = @id
GO

EXECUTE deleteConductor 4
GO