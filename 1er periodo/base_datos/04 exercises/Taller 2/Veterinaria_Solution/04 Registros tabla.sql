
PRINT '6. Adicionar al menos dos registros por tabla (por comandos y usted define el valor de los datos)'

USE Veterinaria


SELECT * FROM TipoMascota
-- Inserta registro en tabla TipoMascota
INSERT INTO TipoMascota(tipoMascota) VALUES('Perro')
INSERT INTO TipoMascota(tipoMascota) VALUES('Gato')
INSERT INTO TipoMascota(tipoMascota) VALUES('Perico')


SELECT * FROM Raza
-- inserta registro en tabla Raza
INSERT INTO Raza(nombreRaza) VALUES('bullmastiff')
INSERT INTO Raza(nombreRaza) VALUES('bull terrier')
INSERT INTO Raza(nombreRaza) VALUES('pixie bob')
INSERT INTO Raza(nombreRaza) VALUES('Devon rex')
INSERT INTO Raza(nombreRaza) VALUES('Australiano')
INSERT INTO Raza(nombreRaza) VALUES('Opalinos')


SELECT * FROM Mascota
-- Inserta registro en tabla Mascota
INSERT INTO Mascota(nombreMascota, fechaNacimiento) VALUES('Rex','2015-03-30')
INSERT INTO Mascota(nombreMascota, fechaNacimiento) VALUES('Dart','2017-06-04')
INSERT INTO Mascota(nombreMascota, fechaNacimiento) VALUES('Pepe','2019-10-12')


SELECT * FROM Propietario
-- Inserta registro en tabla Propietario
INSERT INTO Propietario(nomPropietario, apellPropietario, telPropietario) VALUES('Juan Carlos','Mendoza Peláez','3126578')
INSERT INTO Propietario(nomPropietario, apellPropietario, telPropietario) VALUES('Daniel','Echeverry Toro','3567899')
INSERT INTO Propietario(nomPropietario, apellPropietario, telPropietario) VALUES('Alejandra','Tabares','3563314')


SELECT * FROM Empleados
-- Inserta registro en tabla Empleados
INSERT INTO Empleados(nomEmpleado) VALUES('Enrique Isaza Cadavid')
INSERT INTO Empleados(nomEmpleado) VALUES('María Londoño')
INSERT INTO Empleados(nomEmpleado) VALUES('Carlos Betancurt')


SELECT * FROM Servicio
-- Inserta registro en tabla Servicio
INSERT INTO Servicio(nomServicio, costoServicio) VALUES('Corte','22000')
INSERT INTO Servicio(nomServicio, costoServicio) VALUES('Desparasitación','33000')
INSERT INTO Servicio(nomServicio, costoServicio) VALUES('Revisión','25000')
INSERT INTO Servicio(nomServicio, costoServicio) VALUES('Vacuna','21000')


-- Altera la tabla Cita para agregar el campo Observación
SELECT * FROM Cita
ALTER TABLE Cita ADD observacion nvarchar(100)


-- 
SELECT * FROM Mascota
UPDATE Mascota SET idTipoMascota= default
ALTER TABLE Mascota ALTER COLUMN idTipoMascota int NOT NULL


-- Eliminar tabla de la base de datos
DROP TABLE TablaEjemplo

-- Elimina la base de datos
DROP DATABASE BaseEjemplo