/*
1. Crear un método que lea un vector de números enteros de tamaño N y luego otro método
que reciba como parámetros de entrada el vector, su tamaño y un dato, y devuelva la posición
donde se encuentra dicho dato, suponga que el dato si está y solo una vez
 */
package pkg01_metodo_leer_vector;
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
        ClsVectores objVectores = new ClsVectores();
        
        // Definiciones
        int n, p;
        
        //Entrada
        System.out.print("Ingrese la cantidad de números enteros: ");
        n = objLeer.nextInt();
        int[] numEnteros = new int[n]; //Creación de arreglo
        
        System.out.println("Ingresa una posición para key: ");
        p = objLeer.nextInt();
        
        //Instancia
        numEnteros = objVectores.leerVector(n);
        objVectores.imprimirVector(n, numEnteros);
        
        objVectores.posicionVector(p, numEnteros);
    }
    
}
