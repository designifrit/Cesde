
PRINT '9.	Cambiar la fecha de la cita de Firulais para dos d�as despu�s con un nuevo empleado '

USE Veterinaria
GO

SELECT * FROM Cita
-- Cambia fecha de cita y m�dico asignado
UPDATE Cita SET fechaCita='2020-04-24T10:15:00', idEmpleado='1', observacion='Se reprogram� la cita para 2 d�as despu�s con el doctor Enrique'

