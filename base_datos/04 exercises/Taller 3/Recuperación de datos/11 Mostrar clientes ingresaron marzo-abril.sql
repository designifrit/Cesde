

PRINT 'Mostrar el nombre, apellidos y fecha de ingreso de los clientes que ingresaron
entre 1 de marzo de 2018 y 30 de abril de 2018'

USE HiperAlmacen
GO


SELECT NombreCli + ' ' + Apellido AS 'Nombre clientes', FechaIng FROM Clientes
WHERE FechaIng BETWEEN '2018-03-1' AND '2018-04-30'