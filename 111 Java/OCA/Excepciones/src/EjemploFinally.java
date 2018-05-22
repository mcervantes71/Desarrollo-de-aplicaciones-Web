public class EjemploFinally
{
    public static void main(String[] args) throws Error
    {
        LanzaExcepcion le = new LanzaExcepcion();
        //le.Metodo1();
        try
        {
            le.Metodo1();
        }
        catch(Exception e)
        {
            System.out.println("Tipo de excepcion: " + e.getClass().getName());
        }
        finally
        {
            System.out.println("Esto siempre se imprime");
        }
    }
}

class LanzaExcepcion
{
    public void Metodo1()throws Exception
    {
        Metodo2();
    }
    
    public void Metodo2() throws Exception
    {
        //throw new NumberFormatException();
        //Integer.parseInt("5");
        throw new Exception();
    }
}