-- Verifica el estatus de las bases de datos
SELECT name,state_desc as Status FROM sys.databases

-- Verifica cuál es el error que tiene la base de datos
DBCC CHECKDB(CentroMedico) WITH NO_INFOMSGS

-- Muestra la ruta de los archivos MDF y LDF
SELECT * FROM sys.sysaltfiles ORDER BY name