
PRINT '10.	Cambiar la raza de Firulais (La nueva raza es Pastor Alem�n)'

USE Veterinaria
GO


SELECT * FROM Raza
-- Inserta la raza Pastor Alem�n
INSERT INTO Raza(nombreRaza) VALUES('Pastor Alem�n')


-- Actualiza la raza de Firulais
SELECT * FROM Mascota
UPDATE Mascota SET idRaza='14'
WHERE idMascota='10'