
PRINT '4. Creaci�n de llaves For�neas'

USE Veterinaria


-- Creaci�n de llave foranea para Mascota > Raza
ALTER TABLE Mascota WITH CHECK ADD CONSTRAINT FK_Mascota_Raza FOREIGN KEY(idRaza)
REFERENCES Raza(idRaza)


-- Creaci�n de llave foranea para Mascota > TipoMascota
ALTER TABLE Mascota WITH CHECK ADD CONSTRAINT FK_Mascota_TipoMascota FOREIGN KEY(idTipoMascota)
REFERENCES TipoMascota(idTipoMascota)


-- Creaci�n de llave foranea para Propietario > Mascota
ALTER TABLE Propietario WITH CHECK ADD CONSTRAINT FK_Propietario_Mascota FOREIGN KEY(idMascota)
REFERENCES Mascota(idMascota)


-- Creaci�n de llaves foraneas para Cita > idEmpleado / idPropietario / idServicio / idMascota
ALTER TABLE Cita WITH CHECK ADD CONSTRAINT FK_Cita_Empleado FOREIGN KEY(idEmpleado)
REFERENCES Empleados(idEmpleado)

ALTER TABLE Cita WITH CHECK ADD CONSTRAINT FK_Cita_Propietario FOREIGN KEY(idPropietario)
REFERENCES Propietario(idPropietario)

ALTER TABLE Cita WITH CHECK ADD CONSTRAINT FK_Cita_Servicio FOREIGN KEY(idServicio)
REFERENCES Servicio(idServicio)

ALTER TABLE Cita WITH CHECK ADD CONSTRAINT FK_Cita_Mascota FOREIGN KEY(idMascota)
REFERENCES Mascota(idMascota)