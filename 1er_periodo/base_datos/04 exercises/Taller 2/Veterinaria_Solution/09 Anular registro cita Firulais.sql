

PRINT '11.	Anular el registro de Firulais y la cita'

USE Veterinaria
GO


SELECT * FROM Mascota
-- Elimina registro de Firulais
DELETE FROM Mascota WHERE idMascota='10'


SELECT * FROM Cita
-- Elimina registro de Cita
DELETE FROM Cita WHERE idCita='7'