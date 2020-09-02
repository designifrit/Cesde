
PRINT '4. Crear las tablas
Nota: Debe ser por comandos y los nombres son definidos por usted, todos los campos son obligatorios, deben colocarse las llaves primarias y for�neas.
5. Agregar a cada tabla un campo que permita anularlas con valor por defecto de true (1) (comandos).'

USE Veterinaria


-- Creaci�n de tabla Tipo de mascota
CREATE TABLE TipoMascota(
	idTipoMascota int IDENTITY(1,1) NOT NULL,
	tipoMascota varchar(40) NOT NULL,
	CONSTRAINT PK_idTipoMascota PRIMARY KEY(idTipoMascota)
)

-- Creaci�n de tabla Raza de mascota
CREATE TABLE Raza(
	idRaza int IDENTITY(1,1) NOT NULL,
	nombreRaza varchar(50) NOT NULL,
	CONSTRAINT PK_idRaza PRIMARY KEY(idRaza)
)

-- Creaci�n de tabla Mascota
CREATE TABLE Mascota(
	idMascota int IDENTITY(1,1) NOT NULL,
	nombreMascota varchar(40) NOT NULL,
	fechaNacimiento date NULL,
	idTipoMascota int NOT NULL,
	idRaza int NOT NULL,
	CONSTRAINT PK_idMascota PRIMARY KEY(idMascota)
)


-- Creaci�n de tabla Propietario
CREATE TABLE Propietario(
	idPropietario int IDENTITY(1,1) NOT NULL,
	idMascota int,
	nomPropietario varchar(40) NOT NULL,
	apellPropietario varchar(60) NOT NULL,
	telPropietario int NULL,
	CONSTRAINT PK_idPropietario PRIMARY KEY(idPropietario)
)

-- Creaci�n tabla Empleados
CREATE TABLE Empleados(
	idEmpleado int IDENTITY(1,1) NOT NULL,
	nomEmpleado varchar(60) NOT NULL,
	CONSTRAINT PK_idEmpleado PRIMARY KEY(idEmpleado)
)

--Creaci�n tabla Servicio
CREATE TABLE Servicio(
	idServicio int IDENTITY(1,1) NOT NULL,
	nomServicio varchar(100) NOT NULL,
	costoServicio money, 
	CONSTRAINT PK_idServicio PRIMARY KEY(idServicio)
)

-- Creaci�n de tabla Cita
CREATE TABLE Cita(
	idCita int IDENTITY(1,1) NOT NULL,
	fechaCita smalldatetime NOT NULL,
	idEmpleado int NOT NULL,
	idPropietario int NOT NULL,
	idServicio int NOT NULL,
	idMascota int NOT NULL,
	CONSTRAINT PK_idCita PRIMARY KEY(idCita)
)
