/*
Función que reciba 2 números y me devuelva el mayor
 */
package pkg03_mayor_numero;

public class clase_mayor {
    public int buscar_mayor(int dato1, int dato2){
        int may;
        if(dato1 > dato2)
               may = dato1;
        else
               may = dato2;
        return may;
    }
}
