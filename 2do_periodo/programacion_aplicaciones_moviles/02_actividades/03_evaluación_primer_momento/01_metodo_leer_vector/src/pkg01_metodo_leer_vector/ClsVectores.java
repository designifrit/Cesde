/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pkg01_metodo_leer_vector;
import java.util.Scanner;
/**
 *
 * @author Alejandro
 */
public class ClsVectores {
    Scanner objLeer = new Scanner(System.in);
    
    int i; // Índice arreglo
    
    // ---- Métodos ----
    
    // Leer el vector, su índice y los datos
    public int[] leerVector(int n)
    {
       int[] numeros = new int[n];
       for(i = 0; i < n; i++) 
       {
           System.out.print("Ingrese un elemento en el índice [" + i + "]: ");
           numeros[i] = objLeer.nextInt();
       }	
       return numeros;
    }
    
    public void imprimirVector(int n, int[] numEnteros)
    {
       System.out.println("\nEstos son los elementos del vector\n");
       for(i = 0; i < n; i++) 
       {
           System.out.print(numEnteros[i] + "  ");
       }
    }
    
    public void posicionVector(int p, int[] numEnteros)
    {
        int i = p;
        System.out.println("El elemento " + numEnteros[i] + " esta en la posicion [" + i + "]");
    }
}
