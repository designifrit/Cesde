/*
2. Hacer un algoritmo que lea el número N de empleados de una empresa y el salario
básico mensual, y luego calcule el valor de la nómina si a cada uno se le deduce el 8% del salario
básico mensual por prestaciones mensuales y se les da un auxilio de transporte de 97700.
 */
package pkg02_calcular_valor_nomina;
import java.util.Scanner;
/**
 *
 * @author Alejandro
 */
public class Main {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        Scanner objLeer = new Scanner(System.in);
        ClsNomina objNomina = new ClsNomina();
        
        // Definiciones
        int n;
        
        System.out.println("--- Calculadora de nómina ---");
        System.out.println("Ingresa la cantidad de empleados a registrar: ");
        n = objLeer.nextInt();
        
        objNomina.calcularNomina(n);
    }
}
