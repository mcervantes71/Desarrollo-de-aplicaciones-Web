
/***
 * Sobre escritrua de metods con exceptiones
 * 
 * el metodo sobreescrito puede declarar
 * -no exceptiones
 * - una o mas excepciones declaradas por le metodo original
 * - una o mas subclases de las excepciones declaradas en el metodo original
 * 
 * El metodo sobre escrito no puede declarar
 * - excepciones adicionales no declaradas por el metodo original
 * - superclases de excepciones declaradas en el metodo original
 */


public class ManejoExcepcion
{
    public static void main(String[] args)
    {
        String result = "";
        String v = null;
        
        try
        {
            try
            {
                result += "before";
                v.length();
                result += "after";
            }
            catch(NullPointerException e)
            {
                result += "catch";
                throw new Exception(); 
                //result += "after";    //no se llega a este punto
            }
            finally
            {
                result += "finally";
            }
        }
        catch(Exception e)
        {
            result += "DONE";
        }
    }
}
