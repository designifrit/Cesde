
USE Concesionario
GO

/* Creando la tabla TIPO VEHICULO*/
CREATE TABLE Tipo_Vehiculo(
	id int primary key,
	nombre varchar(25)
)
GO

/* Creando procedimiento almacenado para poder almacenar datos */
CREATE PROCEDURE addTipoVehiculo(
	@id int,
	@nombre varchar(25)
)
AS
	INSERT INTO Tipo_Vehiculo VALUES(@id, @nombre)
GO

/* Mostrar datos de la tabla */
SELECT * FROM Tipo_Vehiculo

/* Probando que a la tabla se le pueda insertar datos */
EXECUTE addTipoVehiculo 1, 'Camion'
GO

/* Creando procedimiento almacenado para Actualizar datos */
CREATE PROCEDURE updateTipovehiculo(
	@id int,
	@nombre varchar(25)
)
AS
	UPDATE Tipo_Vehiculo SET 
		[nombre] = @nombre
		WHERE id = @id
GO

EXECUTE updateTipovehiculo 2, 'Cuatrimoto'
GO

/* Creando procedimiento almacendado para Eliminar datos */
CREATE PROCEDURE deleteTipoVehiculo(
		@id int
)
AS
	DELETE FROM Tipo_Vehiculo WHERE id = @id
GO

EXECUTE deleteTipoVehiculo 4
GO