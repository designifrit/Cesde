

PRINT '15. Mostrar cuantas unidades del producto 29 se vendieron en la factura 4'

USE HiperAlmacen
GO


SELECT * FROM DetalleFactura
SELECT Idproducto, IdFactura, Cantidad FROM DetalleFactura
WHERE Idproducto='29' AND IdFactura='4'