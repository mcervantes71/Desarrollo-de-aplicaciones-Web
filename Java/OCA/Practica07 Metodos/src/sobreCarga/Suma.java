package sobreCarga;

public class Suma
{
    public static int Suma(int x, int y)
    {
        System.err.println("1");
        return x + y;
    }
    
    private static short Suma(byte x, short y)
    {
        System.err.println("2");
        return (short)(x + y);
    }
    
    public static double Suma(double x, int y)
    {
        System.err.println("3");
        return x + y;
    }
    
    public static float Suma(int x, float y)
    {
        System.err.println("4");
        return x + y;
    }
    
    public static String Suma(int x, int y, String m)
    {
        System.err.println("5");
        return m + (x + y);
    }
    
    public static void main(String[] args)
    {
        System.out.println(Suma(10, 5));
        System.out.println(Suma(5, 3.5f));
        System.out.println(Suma(23, 56, "Suma: "));
    }
}
