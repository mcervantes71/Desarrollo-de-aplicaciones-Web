package ejercicio1;

import java.util.Scanner;

public class Ejercicio1
{
    public static float Calcular(int pies)
    {
        if(pies > 0)
            return pies * 12 * 2.54f;
        else
            return -1;    
    }
    public static double Calcular(double pulgadas)
    {
        if(pulgadas > 0)
            return pulgadas  * 2.54f;
        else
            return -1;
    }
    
    public static double Calcular(int pies, double pulgadas)
    {
        if(pies > 0 && pulgadas > 0)
            return (pies * 12 + pulgadas)  * 2.54f;
        else
            return -1;
    }
        
    public static void main(String[] args)
    {
        int pies;
        double pulgadas;
        String op;
        
        Scanner teclado = new Scanner(System.in);
        
        do{
            //Runtime.getRuntime().exec("clear");
            System.out.println("\n* * *   C o n v e r s i o n e s   * * *");
            System.out.println("Conversion Pies y/o Pulgadas a Centimetros");
            System.out.println("1) Pulgadas\n2) Pies\n3)Pies y Pulgadas");
            System.out.print("Cual opcion desea seleccionar ?? ");
            op = teclado.next();
            
            switch(op)
            {
                case "1":
                    System.out.println("* * *   Pulgadas a Centimetros   * * *");
                    System.out.println("Cuantas Pulgadas desea convertir a centimetros ??");
                    pulgadas = teclado.nextFloat();
                    
                    System.out.println(pulgadas + "\" = " + Calcular(pulgadas) + " cm");
                    break;
                case "2":
                    System.out.println("* * *   Pies a Centimetros   * * *");
                    System.out.println("Cuantas Pies desea convertir a centimetros ??");
                    pies = teclado.nextInt();
                    
                    System.out.println(pies + "\' = " + Calcular(pies) + " cm");
                    break;
                case "3":
                    System.out.println("* * *   Pies y Pulgadas a Centimetros   * * *");
                    System.out.println("Cuantas Pulgadas desea convertir a centimetros ??");
                    pulgadas = teclado.nextFloat();
                    System.out.println("Cuantas Pies desea convertir a centimetros ??");
                    pies = teclado.nextInt();
                    
                    System.out.println(pies + "\'" + pulgadas + "\" = " + Calcular(pies, pulgadas) + " cm");
                    break;
                default:
                    System.out.println("No es una opcion valida :(");
            }
            
            System.out.print("\nDesea continuar ?? (s/n) ");
            op = teclado.next();
        }while(op.equals("s")  || op.equals("S"));
    }
}
