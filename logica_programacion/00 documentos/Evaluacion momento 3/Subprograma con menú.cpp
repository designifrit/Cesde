#include <stdio.h>
#include <conio.h>
#include <stdlib.h>
#include <math.h>
#include <io.h>
#include <fcntl.h>
#include <time.h>
#include <sys/stat.h>
#include <sys/types.h>
#include <string>
#include <iostream>
using namespace std;

char n1, n2, detener;
char bonNom[41], jovNom[41], resNomJoven[41];
int opcion, bonEst, bonSal, jovNum, jovEdad, resBonificacion, resEdadJoven;
float potBase, potPot, resPotencia;
void cargaMenu(int& pMenu) {
	cprintf("\r\n");
	cprintf("---- MENU DE OPCIONES ----");
	cprintf("\r\n");
	cprintf("1. Calcular bonificacion de un empleado: ");
	cprintf("\r\n");
	cprintf("2. Calcular la Potencia de un numero: ");
	cprintf("\r\n");
	cprintf("3. Determinar que persona ingresada es la mas joven: ");
	cprintf("\r\n");
	cprintf("4. Terminar el programa (SALIR): ");
	cprintf("\r\n");
	cprintf("\r\n");
	cprintf("Opcion: ");
	cin >> pMenu;
	cprintf("\r\n");
}

void generarTitulo(char pTitulo[31]) {
	cprintf("\r\n");
	cprintf("******************************************************************");
	cprintf("\r\n");
	cprintf("%s", "        " + string(pTitulo));
	cprintf("\r\n");
	cprintf("******************************************************************");
	cprintf("\r\n");
}

void menorEdad(char pNom[41], int pEdad) {
	n1 = 'f';
	while (n1 != 'n') {
		if (pEdad < resEdadJoven) {
			strncpy(resNomJoven, pNom, 41);
			resNomJoven[40]='\0';
			resEdadJoven = pEdad;
		}
		while (n2 != 'n') {
			cprintf("Desea ingresar otro registro (S/N)");
			cin >> n2;
			if (n2 == 's'){
				n2 = 'n';
			}
			else if (n2 == 'S'){
				n2 = 'n';
			}
			else if (n2 == 'n'){
				n1 = 'n';
				n2 = 'n';
			}
			else if (n2 == 'N'){
				n1 = 'n';
				n2 = 'n';
			}
			else {
				cprintf("\r\n");
				cprintf("Escriba una opcion valida");
				cprintf("\r\n");
				n2 = 'f';
			}
		}
		n2 = 'f';
		if (n1 != 'n') {
			cprintf("Escribe el nombre de la persona: ");
			gets(pNom);
			cprintf("Cual es la edad: ");
			cin >> pEdad;
		}
		cprintf("\r\n");
	}
	cprintf("%s es la persona mas joven con %d anios", resNomJoven, resEdadJoven);
}

int bonificacionEmpleado(char& pNom[41], int pCivil, int pSalario) {
	int salario;
	if (pCivil == 1) {
		salario = (int)((float)pSalario / (float)2);
	}
	else {
		if (pCivil == 2) {
			salario = pSalario;
		}
		else {
			if (pCivil == 3) {
				salario = pSalario * 2;
			}
			else {
				cprintf("la opcion que ingreso en estado civil es invalida");
				salario = 0;
			}
		}
	}
	return (salario);
}

float potenciaNumero(float& pBase, float pPotencia) {
	float potencia;
	potencia = pow(pBase, pPotencia);
	return (potencia);
}

void main() {
	n1 = 'f';
	n2 = 'f';
	resBonificacion = 0;
	resPotencia = (float)(0);
	strncpy(resNomJoven, "", 1);
	resNomJoven[0]='\0';
	resEdadJoven = 110;
	do {
		clrscr();
		cargaMenu(opcion);
		if (opcion == 1){
			clrscr();
			generarTitulo("Calcula la bonificacion de un empleado");
			cprintf("\r\n");
			cprintf("Escriba el nombre del empleado: ");
			gets(bonNom);
			cprintf("Escriba el estado civil (1 = Soltero, 2 = Casado, 3 = Union libre): ");
			cin >> bonEst;
			cprintf("Cual es el salario mensual del empleado: $");
			cin >> bonSal;
			resBonificacion = bonificacionEmpleado(bonNom, bonEst, bonSal);
			cprintf("\r\n");
			cprintf("La bonificacion de salario para %s es: $%d", bonNom, resBonificacion);
			cprintf("\r\n");
			cprintf("\r\n");
			cprintf("        Digite ENTER para regresar al menu");
			cin >> detener;
		}
		else if (opcion == 2){
			clrscr();
			generarTitulo("Calcula la Potencia de un numero");
			cprintf("\r\n");
			cprintf("Ingrese el numero Base: ");
			cin >> potBase;
			cprintf("Ingresa el segundo numero: ");
			cin >> potPot;
			resPotencia = potenciaNumero(potBase, potPot);
			cprintf("La potencia del numero base es: %.10f", resPotencia);
			cprintf("\r\n");
			cprintf("\r\n");
			cprintf("        Digite ENTER para regresar al menu");
			cin >> detener;
		}
		else if (opcion == 3){
			clrscr();
			generarTitulo("Determinar que persona ingresada es la mas joven");
			cprintf("\r\n");
			cprintf("Escribe el nombre de la persona: ");
			gets(jovNom);
			cprintf("Cual es la edad de la persona: ");
			cin >> jovEdad;
			menorEdad(jovNom, jovEdad);
			cprintf("\r\n");
			cprintf("\r\n");
			cprintf("        Digite ENTER para regresar al menu");
			cin >> detener;
		}
		else if (opcion == 4){
			clrscr();
			generarTitulo("Gracias por usar nuestro software");
		}
		else {
			cprintf("\r\n");
			generarTitulo("Escriba una opcion valida");
			cprintf("\r\n");
			cin >> detener;
		}
	} while (!(opcion == 4));
}
