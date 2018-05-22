package operadores;

public class testOperadoresLogicos
{
    static boolean esMenor(int n)
    {
        if(n < 10)
        {
            System.out.println(n + " < 10");            
        }
        else
        {
            System.out.println(n + " > 10");
        }
        
        return n < 10;
    }
    
    public static void main(String[] args)
    {
        System.out.println("Operador &");
        if(esMenor(16) & esMenor(14))
        {
            System.out.println("1");
        }
        
        System.out.println("Operador |");
        if(esMenor(6) | esMenor(14))
        {
            System.out.println("2");
        }
        
        System.out.println("\n* * *   Operadores Corto Circuito   * * *\n");
        System.out.println("Operador &&");
        if(esMenor(16) && esMenor(14))
        {
            System.out.println("3");
        }
        
        System.out.println("Operador ||");
        if(esMenor(6) || esMenor(14))
        {
            System.out.println("4");
        }
    }
}
