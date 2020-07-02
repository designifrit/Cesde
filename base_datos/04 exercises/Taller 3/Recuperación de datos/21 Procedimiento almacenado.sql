
USE HiperAlmacen
GO




-- Crea un procedimiento almacenado
CREATE PROCEDURE sp_adicionar_cliente01
	@pIdentificacion int,
	@pApellido varchar(20),
	@pNombreCli varchar(20),
	@pCiudad varchar(20),
	@pcelular varchar(15),
	@pComuna varchar(10),
	@pFechaIng date
AS
	-- Especifica en donde se almacena la informaci�n
	INSERT INTO Clientes(Identificacion,Apellido,NombreCli,Ciudad,celular,Comuna,FechaIng)
	VALUES (@pIdentificacion,@pApellido,@pNombreCli,@pCiudad,@pcelular,@pComuna,@pFechaIng)

	-- Ejecuta el procedimiento almacenado para ingresar la informaci�n con la ayuda de un lenguaje de programaci�n
	EXEC sp_adicionar_cliente01 400,'Isaac','Jorge','Medelll�n','3003216545','Comuna 3','2020-06-24'

	-- Verifica si el registro de ingres�
	SELECT * FROM Clientes WHERE Identificacion=400




-- Crea un procedimiento almacenado para modificar la informaci�n ingresada
ALTER PROCEDURE sp_modificar_cliente01
	@pcelular varchar(15),
	@pComuna varchar(10),
	@pCiudad varchar(20),
	@pIdentificacion int
AS
	UPDATE Clientes SET celular=@pcelular, Comuna=@pComuna, Ciudad=@pCiudad
	WHERE Identificacion=@pIdentificacion

	EXEC sp_modificar_cliente01 '3153214565','Comuna 1','Caldas',400




-- Par�metros de salida
CREATE PROCEDURE sp_totales_producto
	@ptotal_inventario int output,
	@ptotal_unidades int output
AS
	SELECT @ptotal_inventario=SUM(Cantidad * Precio), @ptotal_unidades=SUM(Cantidad)
	FROM Productos

	-- Ejecuta el procedimiento almacenado con par�metros
	DECLARE @ptotal int
	DECLARE @punidades int

	EXEC sp_totales_producto @ptotal_inventario=@ptotal OUTPUT, @ptotal_unidades=@punidades OUTPUT

	PRINT 'El total del inventario es: $' + CONVERT(varchar(10),@ptotal)
	PRINT 'El total de unidades es: ' + CONVERT(varchar(10), @punidades)
