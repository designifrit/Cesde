
USE Concesionario
GO

/* Creando tabla VEHICULO*/
CREATE TABLE Vehiculo(
	id int Primary key,
	marca varchar(25) unique,	/* Marca unica (un vehiculo no puede tener 2 marcas) */
	modelo varchar(25) not null,
	placa varchar (6) not null,
	anio int not null,
	id_Tipo_Vehiculo int not null,
	CONSTRAINT FK_Tipo_Vehiculo FOREIGN KEY(id_Tipo_Vehiculo) REFERENCES Tipo_Vehiculo(id)
)

/* Mostrar datos de la tabla */
SELECT * FROM Vehiculo

/* Creando procedimiento almacenado para poder almacenar datos */
GO
CREATE PROCEDURE addVehiculo(
	@id int,
	@marca varchar(25),	/* Marca unica (un vehiculo no puede tener 2 marcas) */
	@modelo varchar(25),
	@placa varchar (6),
	@anio int,
	@id_Tipo_Vehiculo int
)
AS
	INSERT INTO Vehiculo VALUES(@id, @marca, @modelo, @placa, @anio, @id_Tipo_Vehiculo)
GO

EXECUTE addVehiculo '1','Foton','CX3','EDF458', 2019, 1

/* Creando procedimiento almacenado para Actualizar datos */
CREATE PROCEDURE updateVehiculo(
	@id int,
	@marca varchar(25),
	@modelo varchar(25),
	@placa varchar (6),
	@anio int,
	@id_Tipo_Vehiculo int
)
AS
	UPDATE Vehiculo SET 
		[marca] = @marca,
		[modelo] = @modelo,
		[placa] = @placa,
		[anio] = @anio,
		[id_Tipo_Vehiculo] = @id_Tipo_Vehiculo
		WHERE id = @id
GO

EXECUTE updateVehiculo 2, 'Yamaha', 'FZ', 'XFS98', 2019, 2
GO

/* Creando procedimiento almacendado para Eliminar datos */
CREATE PROCEDURE deleteVehiculo(
		@id int
)
AS
	DELETE FROM Vehiculo WHERE id = @id
GO

EXECUTE deleteVehiculo 3
GO