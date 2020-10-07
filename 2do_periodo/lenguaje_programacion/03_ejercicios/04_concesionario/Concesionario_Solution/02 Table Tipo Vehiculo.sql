
USE Concesionario
GO

/* Creando la tabla TIPO VEHICULO*/
CREATE TABLE Tipo_Vehiculo(
	id int primary key,
	nombre varchar(25)
)

/* Creando procedimiento almacenado para poder almacenar datos */
GO
CREATE PROCEDURE addTipoVehiculo(
	@id int,
	@nombre varchar(25)
)

AS INSERT INTO Tipo_Vehiculo VALUES(@id, @nombre)

/* Mostrar datos de la tabla */
SELECT * FROM Tipo_Vehiculo

/* Probando que a la tabla se le pueda insertar datos */
EXECUTE addTipoVehiculo 1, 'Camion'
