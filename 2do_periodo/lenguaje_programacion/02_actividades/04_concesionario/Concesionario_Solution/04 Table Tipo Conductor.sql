
USE Concesionario
GO

CREATE TABLE Tipo_Conductor(
	id int primary key,
	tipo_persona varchar(25) not null
)

GO
CREATE PROCEDURE addTipoConductor(
	@id int,
	@tipo_persona varchar(25)
)
AS INSERT INTO Tipo_Conductor VALUES(@id, @tipo_persona)

SELECT * FROM Tipo_Conductor

EXECUTE addTipoConductor 1, 'Transporte'