public class Argumentos
{
    public static void main(String[] args)
    {
        int suma = 0;
        
        for (String arg : args)
        {
            try
            {
                suma += Integer.parseInt(arg);
            }
            catch(NumberFormatException e)
            {
                System.out.println("Uno de los argumentos no es un entero");
            }
        }
        
        System.out.println("Suma = " + suma);
    }
}
