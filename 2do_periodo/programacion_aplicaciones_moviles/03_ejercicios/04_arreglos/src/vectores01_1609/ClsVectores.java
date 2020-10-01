/* Clase contiene metodos para leer e imprimir un vector
de tamaño N de numeros enteros y el promedio de sus elementos */
package vectores01_1609;
import java.util.Scanner;

public class ClsVectores extends ClsOperaciones{
    
    Scanner oleer=new Scanner(System.in);
    int j;
    
    public int[] leer_vector(int n)
    {
       int[] numeros=new int[n];
       for(j=0;j<n;j++) 
       {
           System.out.print("Digite elemento " + j + " ");
           numeros[j]=oleer.nextInt();
       }	
       return numeros;
    }
    
    public double hallar_promedio(int n, int[] numeros)	
    {
        double acum=0,prom;			
	for(j=0;j<n;j++) 
        {
           acum=acum+ numeros[j];
        } //fin-para			
	prom=acum/n;			
	return prom;				
    } //regrese
    
   public void imprimir_vector(int n, int[] numeros)
   {
       System.out.println("\nElementos del vector\n");
       for(j=0;j<n;j++) 
       {
           System.out.print(numeros[j] + "  ");
       }
   }
}
