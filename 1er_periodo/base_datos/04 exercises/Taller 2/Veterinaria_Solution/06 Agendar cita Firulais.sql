
PRINT '8. Agendar una cita a solo Firulais para vacunarlo y purgarlo (si los servicios
no existen se deben agregar, usted decide el due�o y el empleado)'

USE Veterinaria


SELECT * FROM Cita
-- Asignaci�n de cita para el perro Firulais
INSERT INTO Cita(fechaCita, idEmpleado, idPropietario, idServicio, idMascota) VALUES('2020-04-22T11:25:00','2','3','2','10','Cita de Firulais (Alejandra es la due�a) con la doctora Mar�a')