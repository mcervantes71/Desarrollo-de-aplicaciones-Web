package Operadores;

import java.util.Scanner;

public class Relacionales
{
    public static void main(String[] args)
    {
        /* ==   igual
           !=   diferente
           >    mayor que
           >=   mayor o igual que
           <    menor que
           <=   menor o igual que
        */
        
        Scanner teclado = new Scanner(System.in);
        
        int edad;
        
        System.out.println("Cual es tu edad ??");
        edad = teclado.nextInt();
        
        if(edad >= 18)
        {
            System.out.println("Es mayor de edad");
        }
        else if(edad >= 15)
        {
            System.out.println("Es adolesente");
        }
        else
        {
            System.out.println("Es niño");
        }
    }
}
