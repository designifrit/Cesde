
/* Hacer un programa que lea un vector de tamaño N de numeros enteros, luego 
calcule el promedio e imprima el vector y el promedio */

package vectores01_1609;
import java.util.Scanner;

public class Vectores01_1609 {

    public static void main(String[] args) {
        // Definiciones
        Scanner oleer=new Scanner(System.in);
        ClsVectores ovectores=new ClsVectores();

        int n,mayor,menor,suma;
        double prom;
         
        //leer el tamaño del vector
        System.out.print("Cual la cantidad de numeros? ");
        n=oleer.nextInt();
        int[] num=new int[n];
        
        //instancia
        num=ovectores.leer_vector(n);
        ovectores.imprimir_vector(n, num);
        
        prom=ovectores.hallar_promedio(n, num);
        System.out.println("\nEl promedio de los elementos del vector es " + prom);
        
        mayor=ovectores.hallar_mayor(n, num);
        System.out.println("El mayor elementos del vector es " + mayor);
        
        menor=ovectores.hallar_menor(n, num);
        System.out.println("El menor elementos del vector es " + menor);
        
        suma=ovectores.hallar_suma(n, num);
        System.out.println("La suma de los elementos de las posiciones pares es " + suma);
    }
    
}
