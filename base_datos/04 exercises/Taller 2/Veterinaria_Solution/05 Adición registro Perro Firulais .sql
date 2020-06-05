

PRINT '7. Adicionar un perro llamado Firulais, de raza Dalmata, nacido en marzo de
2018 (si la raza no existe se debe adicionar), código del perro ‘0010’'

USE Veterinaria


SELECT * FROM Mascota
-- Se configura IDENTITY de idMascota para que permita el ingreso de valores int
SET IDENTITY_INSERT Mascota ON
-- Inserta registro nombre del perro y fecha de nacimiento
INSERT INTO Mascota(idMascota, nombreMascota, fechaNacimiento) VALUES('0010', 'Firulais', '2018-03-01')

SELECT * FROM Raza
-- Inserta registro de raza Dalmata
INSERT INTO Raza(nombreRaza) VALUES('Dalmata')