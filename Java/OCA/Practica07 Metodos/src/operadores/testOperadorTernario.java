package operadores;

public class testOperadorTernario
{
    public static void main(String[] args)
    {
        int x = 5;
        int y = (x > 2 && x < 7)? 3 : 13;
        
        System.out.println("y= " + y);
        
        System.out.println("\n* * *   Ternario anidoda    * * *\n");
        System.out.print("y= ");
        System.out.println(x > 2? x < 7? 10 : 2 : 9);
    }
}
