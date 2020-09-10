/*
 * Hacer un programa que calcule e imprima la velocidad de un movil
 */
package pkg02_clases_y_funciones;
import java.util.Scanner;

public class Main {

    public static void main(String[] args) {
        // definiciones
        Scanner oleer = new Scanner(System.in);
        clase_velocidad ovelocidad = new clase_velocidad();
        double vel,esp,tiem;
        
        // lectura de datos
        System.out.println("Cual es la distancia recorrida: ");
        esp = oleer.nextDouble();
        
        System.out.println("Cuál es el tiempor empleado: ");
        tiem = oleer.nextDouble();
        
        // operación
        vel =  ovelocidad.hallar_velocidad(esp, tiem);
        
        // imprimir
        System.out.println("La velocidad es: " + vel + " metros/segundo");
    }
}
