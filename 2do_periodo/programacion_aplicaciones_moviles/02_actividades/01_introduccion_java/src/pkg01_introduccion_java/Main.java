/*
Se tiene un número desconocido de registros (identificación, nombre, sexo, edad, deporte)
Imprima la cantidad de futbolistas que hay, promedio de edad de las mujeres que practican 
natación y la cantidad de hombres mayores de edad que practican baloncesto
 */
package pkg01_introduccion_java;
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
        // TODO code application logic here
        Scanner oleer = new Scanner(System.in);
        String identificacion, nombre, sexo, deporte;
        int edad, cont = 0, con_muj = 0, con_bal = 0;
        double promed = 0, acumed = 0;
        
        System.out.print("Digite una identificación: ");
        identificacion = oleer.next();
        
        while(!identificacion.equals("000"))
        {
            System.out.print("Digite el nombre: ");
            nombre = oleer.next();
            System.out.print("Digite el sexo: ");
            sexo = oleer.next();
            System.out.print("Digite la edad: ");
            edad = oleer.nextInt();
            System.out.print("Digite el deporte: ");
            deporte = oleer.next();
            
            switch(deporte){   // En caso de
                case "futbol":
                        cont = cont + 1;
                        break;
                case "natacion": if(sexo.equals("mujer")){
                        acumed = acumed + edad;
                        con_muj = con_muj + 1;
                    }
                        break;
                case "baloncesto": if(sexo.equals("hombre") && edad >= 18){
                        con_bal = con_bal + 1;
                    }
                        break;
                default:
                    System.out.println("Deporte no válido");
                    break;
            }   // fin caso
            
            System.out.print("Digite una identificación: ");
            identificacion = oleer.next();
        }   // fin mientras
        
        if(con_muj == 0){
            System.out.println("El promedio de edad es cero");
        } else{
            System.out.println("El promedio de edad es 0");
        }
        
        promed = acumed / con_muj;
        System.out.println("La cantidad de futbolistas es: " + cont);
        System.out.println("La cantidad de basquetbolistas es: " + con_bal);
    }
    
}
