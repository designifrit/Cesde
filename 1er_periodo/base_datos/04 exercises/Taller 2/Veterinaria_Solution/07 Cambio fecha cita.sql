
PRINT '9.	Cambiar la fecha de la cita de Firulais para dos días después con un nuevo empleado '

USE Veterinaria
GO

SELECT * FROM Cita
-- Cambia fecha de cita y médico asignado
UPDATE Cita SET fechaCita='2020-04-24T10:15:00', idEmpleado='1', observacion='Se reprogramó la cita para 2 días después con el doctor Enrique'

