/* clase contiene metodos hallar el mayor t menor numero
del vector y la suma de las posiciones pares */
package vectores01_1609;

public class ClsOperaciones {
   
    int j;
    
   public int hallar_mayor(int n,int[] numeros)    
   {
       int mayor=numeros[0];
       for(j=1;j<n;j++)
           if (numeros[j] > mayor)
               mayor=numeros[j];
       return mayor;
   }
   
   public int hallar_menor(int n,int[] numeros)    
   {
       int menor=numeros[0];
       for(j=1;j<n;j++)
           if (numeros[j] < menor)
               menor=numeros[j];
       return menor;
   }
   
   public int hallar_suma(int n,int[] numeros)
   {
       int suma=0;
       for(j=0;j<n;j++)
           if(j % 2 == 0)
              suma+=numeros[j]; //suma=suma + numeros[j];
       return suma;
   }  
}
