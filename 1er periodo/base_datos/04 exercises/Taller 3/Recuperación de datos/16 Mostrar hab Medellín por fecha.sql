

PRINT 'Mostrar el nombre completo, fecha de ingreso, la ciudad y la fecha de ingreso de los
habitantes de Medell�n ordenados por fecha de ingreso'

USE HiperAlmacen
GO


SELECT NombreCli + ' ' + Apellido AS 'Nombre completo', FechaIng, Ciudad FROM Clientes
WHERE Ciudad='Medell�n' ORDER BY FechaIng ASC
