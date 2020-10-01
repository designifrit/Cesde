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
public class ClsNomina {
    Scanner objLeer = new Scanner(System.in);
    
    int salarioBasico = 0;
    int auxilio = 97700;
    double deduccion = 0.08;
    double valorDeduccion = 0;
            
    public double calcularNomina(int n){
        double totalNomina = 0;
        int i = 1;
        while(i <= n){
            System.out.println("Ingrese el salario básico del empleado " + i + ": ");
            salarioBasico = objLeer.nextInt();
            
            valorDeduccion = salarioBasico * deduccion;
            totalNomina = salarioBasico + auxilio - valorDeduccion;
            System.out.println("El salario neto mensual del empleado " + i + " es: $" + totalNomina);
            System.out.println("La dedducion de las prestaciones del mes es: $" + valorDeduccion);
            
            i++;
        }
        return totalNomina;
    }
}
