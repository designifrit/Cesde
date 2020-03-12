/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package condicionales;
import java.util.Scanner;
/**
 *
 * @author 203
 */
public class Condicionales {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        
        Scanner objLector = new Scanner(System.in);
        int n1, n2, n3;
        
        System.out.print("Ingrese el primer número: ");
        n1 = objLector.nextInt();
        System.out.print("Ingrese el segundo número: ");
        n2 = objLector.nextInt();
        System.out.print("Ingrese el tercer número: ");
        n3 = objLector.nextInt();
        
        if(n1 < n2){
            if(n1 < n3){
                System.out.println(n1 + " es el número menor");
            }
            else{
                System.out.println(n3 + " es el número menor");
            }    
        }
        else{
            if(n2 < n3){
                System.out.println(n2 + " es el número menor");
            }
            else{
                System.out.println(n3 + " es el número menor");
            }
        }
    }
    
}
