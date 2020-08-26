

PRINT '3. Mostrar el nombre, apellido de los clientes que viven en la comuna 9 o comuna 6'

USE HiperAlmacen
GO


SELECT * FROM Clientes
SELECT NombreCli + ' ' + Apellido AS 'Nombre completo', Comuna FROM Clientes
WHERE Comuna='Comuna 9' OR Comuna='Comuna 6' ORDER BY [Nombre completo] ASC