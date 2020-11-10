
USE Concesionario
GO

/* Creando tabla Tipo Conductor*/
CREATE TABLE Tipo_Conductor(
	id int primary key,
	tipo_persona varchar(25) not null
)
GO

/* Mostrar datos de la tabla */
SELECT * FROM Tipo_Conductor

/* Creando procedimiento almacenado para poder almacenar datos */
CREATE PROCEDURE addTipoConductor(
	@id int,
	@tipo_persona varchar(25)
)
AS INSERT INTO Tipo_Conductor VALUES(@id, @tipo_persona)
GO

SELECT * FROM Tipo_Conductor

EXECUTE addTipoConductor 2, 'Publico'


/* Creando procedimiento almacenado para Actualizar datos */
CREATE PROCEDURE updateTipoConductor(
	@id int,
	@tipo_persona varchar(25)
)
AS
	UPDATE Tipo_Conductor SET 
		[tipo_persona] = @tipo_persona
		WHERE id = @id
GO

EXECUTE updateTipoConductor 2, 'Empleado'
GO

/* Creando procedimiento almacendado para Eliminar datos */
CREATE PROCEDURE deleteTipoConductor(
		@id int
)
AS
	DELETE FROM Tipo_Conductor WHERE id = @id
GO

EXECUTE deleteTipoConductor 3
GO