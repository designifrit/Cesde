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

int CDP, CD, TDP, AR, NDH, VDA, CDCM, APNH2, CPNH2, CTDP4, CCD4, CDCMAYOR, DLMENOR;
char DL[51], DLM[51];
char N, R;
float PNHA, PFC;
void main() {
	N = 'F';
	R = 'F';
	PNHA = (float)(0);
	APNH2 = 0;
	CPNH2 = 0;
	CDCM = 0;
	CDCMAYOR = 0;
	PFC = (float)(0);
	CTDP4 = 0;
	CCD4 = 0;
	strncpy(DLM, "SIN DATOS", 10);
	DLM[9]='\0';
	DLMENOR = 999999999;
	cprintf("Este algoritmo genera el promedio de habitaciones, el porcentaje de fincas y establece que propiedad tiene mayor valor y menor area de un conjunto de registros de la inmobiliaria");
	cprintf("\r\n");
	while (N != '*') {
		cprintf("\r\n");
		cprintf("Ingresa el CODIGO de la propiedad (valor numerico): ");
		cin >> CDP;
		cprintf("Ingresa la DIRECCION de la propiedad: ");
		gets(DL);
		R = 'F';
		while (R != '*') {
			cprintf("En que CIUDAD se encuentra la propiedad (1 = Medellin, 2 = Envigado, 3 = Itagui, 4 = Copacabana): ");
			cin >> CD;
			if (CD == 1){
				R = '*';
			}
			else if (CD == 2){
				R = '*';
			}
			else if (CD == 3){
				R = '*';
			}
			else if (CD == 4){
				R = '*';
			}
			else {
				cprintf("\r\n");
				cprintf("Ha ingresado un valor invalido");
				cprintf("\r\n");
				R = 'F';
			}
		}
		R = 'F';
		while (R != '*') {
			cprintf("De que TIPO es la propiedad (1 = Casa, 2 = Apartamento, 3 = Local comercial, 4 = Finca): ");
			cin >> TDP;
			if (TDP == 1){
				R = '*';
			}
			else if (TDP == 2){
				R = '*';
			}
			else if (TDP == 3){
				R = '*';
			}
			else if (TDP == 4){
				R = '*';
			}
			else {
				cprintf("\r\n");
				cprintf("Ha ingresado un valor invalido");
				cprintf("\r\n");
				R = 'F';
			}
		}
		R = 'F';
		cprintf("Ingrese la AREA de la propiedad en metros: ");
		cin >> AR;
		cprintf("Cuantas HABITACIONES tiene la propiedad: ");
		cin >> NDH;
		cprintf("Cual es el VALOR del alquiler: ");
		cin >> VDA;
		if (TDP == 1) {
			if (VDA > CDCMAYOR) {
				CDCMAYOR = VDA;
				CDCM = CDP;
			}
		}
		else {
			if (TDP == 2) {
				APNH2 = APNH2 + NDH;
				CPNH2 = CPNH2 + 1;
			}
			else {
				if (TDP == 4) {
					CCD4 = CCD4 + 1;
					if (CD == 4) {
						CTDP4 = CTDP4 + 1;
					}
				}
				else {
					if (TDP == 3) {
						if (AR < DLMENOR) {
							DLMENOR = AR;
							strncpy(DLM, DL, 51);
							DLM[50]='\0';
						}
					}
				}
			}
		}
		while (R != '*') {
			cprintf("\r\n");
			cprintf("Desea ingresar otro registro (S / N): ");
			cin >> N;
			if (N == 'S'){
				R = '*';
				N = 'F';
			}
			else if (N == 's'){
				R = '*';
				N = 'F';
			}
			else if (N == 'N'){
				R = '*';
				N = '*';
			}
			else if (N == 'n'){
				R = '*';
				N = '*';
			}
			else {
				cprintf("\r\n");
				cprintf("Ha ingresado un valor invalido");
				cprintf("\r\n");
				R = 'F';
			}
		}
	}
	if (CDCMAYOR != 0) {
		cprintf("\r\n");
		cprintf("El CODIGO de la casa con mayor valor es %d con un total de: $%d", CDCM, CDCMAYOR);
		cprintf("\r\n");
	}
	else {
		cprintf("No se ingreso un valor de alquiler en TDP = Casa");
		cprintf("\r\n");
	}
	if (PNHA != 0) {
		cprintf("\r\n");
		PNHA = (float)APNH2 / (float)CPNH2;
		cprintf("El PROMEDIO de numero de habitaciones de los apartamentos es: %.10f habitaciones", PNHA);
		cprintf("\r\n");
	}
	else {
		cprintf("No se ingreso habitaciones en TDP = Apartamento");
		cprintf("\r\n");
	}
	if (CCD4 != 0) {
		cprintf("\r\n");
		PFC = (float)(CTDP4 * 100) / (float)CCD4;
		cprintf("El PORCENTAJE que representan las fincas localizadas en Copacabana con respecto a todas las fincas es: %.10f", PFC);
		cprintf("\r\n");
	}
	else {
		cprintf("No se ingreso fincas de la zona de Copacabana");
		cprintf("\r\n");
	}
	if (DLMENOR != 999999999) {
		cprintf("\r\n");
		cprintf("La DIRECCION del local con menor area es %s con un AREA total de: %dmts.", DLM, DLMENOR);
		cprintf("\r\n");
	}
	else {
		cprintf("No se ingreso locales / area");
		cprintf("\r\n");
	}
}
