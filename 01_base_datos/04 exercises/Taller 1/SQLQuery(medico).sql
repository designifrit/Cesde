create database lunes /* Crea la base de datos LUNES */
use lunes /*  */

create table paciente(
	id_paciente nvarchar(10),
	tipo_doc nvarchar(15) not null,
	nombre nvarchar(50) not null,
	tel_paciente nvarchar(10),
	constraint pk_paciente primary key(id_paciente)
)

create table medico(
	id_medico nvarchar(10),
	nom_medico nvarchar(50),
	especialidad nvarchar(20),
	constraint pk_medico primary key(id_medico)
)

create table cita(
	cod_cita nvarchar(10),
	fecha smalldatetime,
	id_medico nvarchar(10),
	id_paciente nvarchar(10),
	valor int,
	diagnostico nvarchar(max),
	activo bit,
	constraint pk_cod_cita primary key(cod_cita)
)

use lunes
alter table paciente add activo bit
alter table medico add activo bit
alter table paciente alter column tipo_doc nvarchar(20)

drop table paciente
drop database lunes 
