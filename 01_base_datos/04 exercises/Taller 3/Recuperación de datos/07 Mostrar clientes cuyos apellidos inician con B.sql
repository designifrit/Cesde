

PRINT 'Mostrar el nombre, apellido y fecha de ingreso de los clientes cuyos apellidos comienzan por la letra “B”'

USE HiperAlmacen
GO


SELECT * FROM Clientes
SELECT NombreCli AS 'Nombre', Apellido, FechaIng FROM Clientes
WHERE Apellido LIKE 'b%'