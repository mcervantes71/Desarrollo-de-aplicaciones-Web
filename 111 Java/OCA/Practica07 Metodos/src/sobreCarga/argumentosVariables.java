package sobreCarga;

public class argumentosVariables
{
    public static double promedio(int... n)
    {
        int suma = 0;
        
        if(n.length > 0)
        {
            for (int valor : n)
            {
                suma += valor;
            }
        
            return suma/n.length;
        }
        else
            return 0;
            
    }
    
    //public static void main(String[] args)
    public static void main(String... args)
    {
        System.out.println(promedio());
        System.out.println(promedio(1, 2));
        System.out.println(promedio(1, 2, 3, 4, 5, 6, 7, 8, 9, 0));
    }
}
