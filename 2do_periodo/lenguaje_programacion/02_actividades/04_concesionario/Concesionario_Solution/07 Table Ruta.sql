
USE Concesionario
GO

CREATE TABLE Ruta(
	id int primary key,
	estacion varchar(40) not null,
	id_vehiculo int
	CONSTRAINT FK_Vehiculo_Ruta FOREIGN KEY(id_vehiculo) REFERENCES Vehiculo(id)
)

SELECT * FROM Ruta

GO
CREATE PROCEDURE addRuta(
	@id int,
	@estacion varchar(40),
	@id_vehiculo int
)

AS INSERT INTO Ruta VALUES(@id, @estacion, @id_vehiculo)

EXECUTE addRuta 1, 'Los alpes', 1
