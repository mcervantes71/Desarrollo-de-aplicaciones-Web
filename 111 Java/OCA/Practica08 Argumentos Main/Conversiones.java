public class Conversiones
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

    public static void main(String args[])
    {
        System.out.println(Calcular(Integer.parseInt(args[0]),Float.parseFloat(args[1])));
    }
}
