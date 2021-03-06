USE [Concesionario]
GO
/****** Object:  Table [dbo].[Conductor]    Script Date: 13/10/2020 18:27:21 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Conductor](
	[id] [int] NOT NULL,
	[nombre] [varchar](40) NOT NULL,
	[tipo_licencia] [varchar](8) NULL,
	[id_vehiculo] [int] NOT NULL,
	[id_tipo_conductor] [int] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY],
UNIQUE NONCLUSTERED 
(
	[tipo_licencia] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Contrato]    Script Date: 13/10/2020 18:27:21 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Contrato](
	[id] [int] NOT NULL,
	[id_conductor] [int] NOT NULL,
	[id_vehiculo] [int] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Ruta]    Script Date: 13/10/2020 18:27:21 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Ruta](
	[id] [int] NOT NULL,
	[estacion] [varchar](40) NOT NULL,
	[id_vehiculo] [int] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Tipo_Conductor]    Script Date: 13/10/2020 18:27:21 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Tipo_Conductor](
	[id] [int] NOT NULL,
	[tipo_persona] [varchar](25) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Tipo_Vehiculo]    Script Date: 13/10/2020 18:27:21 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Tipo_Vehiculo](
	[id] [int] NOT NULL,
	[nombre] [varchar](25) NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Vehiculo]    Script Date: 13/10/2020 18:27:21 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Vehiculo](
	[id] [int] NOT NULL,
	[marca] [varchar](25) NULL,
	[modelo] [varchar](25) NOT NULL,
	[placa] [varchar](6) NOT NULL,
	[anio] [int] NOT NULL,
	[id_Tipo_Vehiculo] [int] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY],
UNIQUE NONCLUSTERED 
(
	[marca] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
ALTER TABLE [dbo].[Conductor]  WITH CHECK ADD  CONSTRAINT [FK_Tipo_Conductor] FOREIGN KEY([id_tipo_conductor])
REFERENCES [dbo].[Tipo_Conductor] ([id])
GO
ALTER TABLE [dbo].[Conductor] CHECK CONSTRAINT [FK_Tipo_Conductor]
GO
ALTER TABLE [dbo].[Conductor]  WITH CHECK ADD  CONSTRAINT [FK_Vehiculo] FOREIGN KEY([id_vehiculo])
REFERENCES [dbo].[Vehiculo] ([id])
GO
ALTER TABLE [dbo].[Conductor] CHECK CONSTRAINT [FK_Vehiculo]
GO
ALTER TABLE [dbo].[Contrato]  WITH CHECK ADD  CONSTRAINT [FK_Conductor_Contrato] FOREIGN KEY([id_conductor])
REFERENCES [dbo].[Conductor] ([id])
GO
ALTER TABLE [dbo].[Contrato] CHECK CONSTRAINT [FK_Conductor_Contrato]
GO
ALTER TABLE [dbo].[Contrato]  WITH CHECK ADD  CONSTRAINT [FK_Vehiculo_Contrato] FOREIGN KEY([id_vehiculo])
REFERENCES [dbo].[Vehiculo] ([id])
GO
ALTER TABLE [dbo].[Contrato] CHECK CONSTRAINT [FK_Vehiculo_Contrato]
GO
ALTER TABLE [dbo].[Ruta]  WITH CHECK ADD  CONSTRAINT [FK_Vehiculo_Ruta] FOREIGN KEY([id_vehiculo])
REFERENCES [dbo].[Vehiculo] ([id])
GO
ALTER TABLE [dbo].[Ruta] CHECK CONSTRAINT [FK_Vehiculo_Ruta]
GO
ALTER TABLE [dbo].[Vehiculo]  WITH CHECK ADD  CONSTRAINT [FK_Tipo_Vehiculo] FOREIGN KEY([id_Tipo_Vehiculo])
REFERENCES [dbo].[Tipo_Vehiculo] ([id])
GO
ALTER TABLE [dbo].[Vehiculo] CHECK CONSTRAINT [FK_Tipo_Vehiculo]
GO
/****** Object:  StoredProcedure [dbo].[addConductor]    Script Date: 13/10/2020 18:27:22 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[addConductor](
	@id int,
	@nombre varchar(40),
	@tipo_licencia varchar(8),
	@id_vehiculo int,
	@id_tipo_conductor int
)

AS INSERT INTO Conductor VALUES(@id, @nombre, @tipo_licencia, @id_vehiculo, @id_tipo_conductor)
GO
/****** Object:  StoredProcedure [dbo].[addContrato]    Script Date: 13/10/2020 18:27:22 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[addContrato](
	@id int,
	@id_conductor int,
	@id_vehiculo int
)

AS INSERT INTO Contrato VALUES(@id, @id_conductor, @id_vehiculo)
GO
/****** Object:  StoredProcedure [dbo].[addRuta]    Script Date: 13/10/2020 18:27:22 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[addRuta](
	@id int,
	@estacion varchar(40),
	@id_vehiculo int
)

AS INSERT INTO Ruta VALUES(@id, @estacion, @id_vehiculo)
GO
/****** Object:  StoredProcedure [dbo].[addTipoConductor]    Script Date: 13/10/2020 18:27:22 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[addTipoConductor](
	@id int,
	@tipo_persona varchar(25)
)
AS INSERT INTO Tipo_Conductor VALUES(@id, @tipo_persona)
GO
/****** Object:  StoredProcedure [dbo].[addTipoVehiculo]    Script Date: 13/10/2020 18:27:22 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

CREATE PROC [dbo].[addTipoVehiculo](
	@id int,
	@nombre varchar(25)
)

AS INSERT INTO Tipo_Vehiculo VALUES(@id, @nombre)
GO
/****** Object:  StoredProcedure [dbo].[addVehiculo]    Script Date: 13/10/2020 18:27:22 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[addVehiculo](
	@id int,
	@marca varchar(25),	/* Marca unica (un vehiculo no puede tener 2 marcas) */
	@modelo varchar(25),
	@placa varchar (6),
	@anio int,
	@id_Tipo_Vehiculo int
)
AS INSERT INTO Vehiculo VALUES(@id, @marca, @modelo, @placa, @anio, @id_Tipo_Vehiculo)
GO
