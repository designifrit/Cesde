/*
Hacer un programa que lea cuatro números n1, n2, n3 y n4, luego imprima el mayor de ellos
 */
package pkg03_mayor_numero;
import java.util.Scanner;

public class Main {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // Definiciones
        Scanner oleer = new Scanner(System.in);
        clase_mayor omayor = new clase_mayor();
        int num1, num2, num3, num4, may1, may2, mayor;
        
        // Lectura de datos
        System.out.println("Numero uno: ");
        num1 = oleer.nextInt();
        System.out.println("Numero dos: ");
        num2 = oleer.nextInt();
        System.out.println("Numero tres: ");
        num3 = oleer.nextInt();
        System.out.println("Numero cuatro: ");
        num4 = oleer.nextInt();
        
        // Operación
        may1 = omayor.buscar_mayor(num1, num2);
        may2 = omayor.buscar_mayor(num3, num4);
        mayor = omayor.buscar_mayor(may1, may2);
        
        // Imprimir
        System.out.println("El número mayor es: " + mayor);
    }
}
