

PRINT ' Mostrar los nombres de clientes que en la segunda y cuarta letra tienen una “a”
(recuerde que no todas las consultas entregan resultados)'

USE HiperAlmacen
GO


SELECT * FROM Clientes
SELECT NombreCli AS 'Nombre cliente' FROM Clientes
WHERE NombreCli LIKE '_a__a%'