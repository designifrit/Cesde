with Ada.Text_IO; use Ada.Text_IO;
with Ada.Integer_Text_IO; use Ada.Integer_Text_IO;
with Ada.Float_Text_IO; use Ada.Float_Text_IO;
with Ada.Strings; use Ada.Strings;
with Ada.Strings.Maps; use Ada.Strings.Maps;
with Ada.Strings.Fixed; use Ada.Strings.Fixed;
with Pantalla; use Pantalla;

procedure Subprograma con menú is
n1, n2, detener : Character;
bonNom, jovNom, resNomJoven : string(1..41);
opcion, bonEst, bonSal, jovNum, jovEdad, resBonificacion, resEdadJoven : Integer;
potBase, potPot, resPotencia : Float;

procedure cargaMenu(pMenu: in out Integer) is
begin
	New_Line;
	Put("---- MENU DE OPCIONES ----");
	New_Line;
	Put("1. Calcular bonificacion de un empleado: ");
	New_Line;
	Put("2. Calcular la Potencia de un numero: ");
	New_Line;
	Put("3. Determinar que persona ingresada es la mas joven: ");
	New_Line;
	Put("4. Terminar el programa (SALIR): ");
	New_Line;
	New_Line;
	Put("Opcion: ");
	Get(pMenu);
	New_Line;
end cargaMenu;

procedure generarTitulo(pTitulo:String) is
begin
	New_Line;
	Put("******************************************************************");
	New_Line;
	Put("        " & pTitulo(1..Index(pTitulo, To_Set(character'val(0))) - 1));
	New_Line;
	Put("******************************************************************");
	New_Line;
end generarTitulo;

procedure menorEdad(pNom:String; pEdad:Integer) is
begin
	n1 := 'f';
	while n1 /= 'n' loop
		if pEdad < resEdadJoven then
			resNomJoven := Head(pNom(1..Index(pNom, To_Set(character'val(0))) - 1), 41, character'val(0));
			resEdadJoven := pEdad;
		end if;
		while n2 /= 'n' loop
			Put("Desea ingresar otro registro (S/N)");
			Get(n2);
			case n2 is
				when 's' =>
					n2 := 'n';
				when 'S' =>
					n2 := 'n';
				when 'n' =>
					n1 := 'n';
					n2 := 'n';
				when 'N' =>
					n1 := 'n';
					n2 := 'n';
				when others =>
					New_Line;
					Put("Escriba una opcion valida");
					New_Line;
					n2 := 'f';
			end case;
		end loop;
		n2 := 'f';
		if n1 /= 'n' then
			Put("Escribe el nombre de la persona: ");
			Declare
				Lon_Cad : Integer;
			Begin
				Get_Line(pNom, Lon_Cad);
				pNom(Lon_Cad + 1..pNom'length) := (others=>character'val(0));
			End;
			Put("Cual es la edad: ");
			Get(pEdad);
		end if;
		New_Line;
	end loop;
	Put(resNomJoven(1..Index(resNomJoven, To_Set(character'val(0))) - 1));
	Put(" es la persona mas joven con ");
	Put(resEdadJoven, 0);
	Put(" anios");
end menorEdad;

function bonificacionEmpleado(pNom: in out String; pCivil:Integer; pSalario:Integer) return Integer is
	salario : Integer;
begin
	if pCivil = 1 then
		salario := Integer(Float(pSalario) / Float(2));
	else
		if pCivil = 2 then
			salario := pSalario;
		else
			if pCivil = 3 then
				salario := pSalario * 2;
			else
				Put("la opcion que ingreso en estado civil es invalida");
				salario := 0;
			end if;
		end if;
	end if;
	return (salario);
end bonificacionEmpleado;

function potenciaNumero(pBase: in out Float; pPotencia:Float) return Float is
	potencia : Float;
begin
	potencia := pBase**pPotencia;
	return (potencia);
end potenciaNumero;

begin --principal
	n1 := 'f';
	n2 := 'f';
	resBonificacion := 0;
	resPotencia := Float(0);
	resNomJoven := Head("", 41, character'val(0));
	resEdadJoven := 110;
	loop
		Clear_Screen;
		cargaMenu(opcion);
		case opcion is
			when 1 =>
				Clear_Screen;
				generarTitulo("Calcula la bonificacion de un empleado");
				New_Line;
				Put("Escriba el nombre del empleado: ");
				Declare
					Lon_Cad : Integer;
				Begin
					Get_Line(bonNom, Lon_Cad);
					bonNom(Lon_Cad + 1..bonNom'length) := (others=>character'val(0));
				End;
				Put("Escriba el estado civil (1 = Soltero, 2 = Casado, 3 = Union libre): ");
				Get(bonEst);
				Put("Cual es el salario mensual del empleado: $");
				Get(bonSal);
				resBonificacion := bonificacionEmpleado(bonNom(1..Index(bonNom, To_Set(character'val(0))) - 1), bonEst, bonSal);
				New_Line;
				Put("La bonificacion de salario para ");
				Put(bonNom(1..Index(bonNom, To_Set(character'val(0))) - 1));
				Put(" es: $");
				Put(resBonificacion, 0);
				New_Line;
				New_Line;
				Put("        Digite ENTER para regresar al menu");
				Get(detener);
			when 2 =>
				Clear_Screen;
				generarTitulo("Calcula la Potencia de un numero");
				New_Line;
				Put("Ingrese el numero Base: ");
				Get(potBase);
				Put("Ingresa el segundo numero: ");
				Get(potPot);
				resPotencia := potenciaNumero(potBase, potPot);
				Put("La potencia del numero base es: ");
				Put(resPotencia, 0, 6, 0);
				New_Line;
				New_Line;
				Put("        Digite ENTER para regresar al menu");
				Get(detener);
			when 3 =>
				Clear_Screen;
				generarTitulo("Determinar que persona ingresada es la mas joven");
				New_Line;
				Put("Escribe el nombre de la persona: ");
				Declare
					Lon_Cad : Integer;
				Begin
					Get_Line(jovNom, Lon_Cad);
					jovNom(Lon_Cad + 1..jovNom'length) := (others=>character'val(0));
				End;
				Put("Cual es la edad de la persona: ");
				Get(jovEdad);
				menorEdad(jovNom(1..Index(jovNom, To_Set(character'val(0))) - 1), jovEdad);
				New_Line;
				New_Line;
				Put("        Digite ENTER para regresar al menu");
				Get(detener);
			when 4 =>
				Clear_Screen;
				generarTitulo("Gracias por usar nuestro software");
			when others =>
				New_Line;
				generarTitulo("Escriba una opcion valida");
				New_Line;
				Get(detener);
		end case;
		exit when opcion = 4;
	end loop;
end Subprograma con menú;
