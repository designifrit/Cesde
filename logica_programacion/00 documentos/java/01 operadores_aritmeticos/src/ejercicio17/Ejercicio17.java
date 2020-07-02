/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ejercicio17;
    import java.util.Scanner;
/**
 *
 * @author 203
 */
public class Ejercicio17 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        Scanner objLector = new Scanner(System.in);
        
        int numpas, valpas, valcom;
        float totalprod, valpagcon, ganeta;
        
        System.out.print("Escriba el número de pasajeros: ");
        numpas = objLector.nextInt();
        System.out.print("Cuál es el valor del pasaje: ");
        valpas = objLector.nextInt();
        System.out.print("Cuanto gastó en gasolina: ");
        valcom = objLector.nextInt();
        
        totalprod = numpas * valpas;
        valpagcon = totalprod * 10 / 100;
        ganeta = totalprod - valpagcon;
        
        System.out.println("El total producido es: " + totalprod);
        System.out.println("El valor a pagar al conductor es: " + valpagcon);
        System.out.println("La ganancia neta es de: " + ganeta);
    }
    
}
