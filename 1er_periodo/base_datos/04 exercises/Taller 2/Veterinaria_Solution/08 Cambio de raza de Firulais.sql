
PRINT '10.	Cambiar la raza de Firulais (La nueva raza es Pastor Alemán)'

USE Veterinaria
GO


SELECT * FROM Raza
-- Inserta la raza Pastor Alemán
INSERT INTO Raza(nombreRaza) VALUES('Pastor Alemán')


-- Actualiza la raza de Firulais
SELECT * FROM Mascota
UPDATE Mascota SET idRaza='14'
WHERE idMascota='10'