package statics;

public class Marciano
{
    /***
     * Una variable estatica se puede acceder desde cualquier lugar sin
     * necesidad de crear un objeto
     */
    public static int cuentaMarciano;
    //public int x;
    //public final int x;
    //public static final int x;
    
    /*static{
        x = 5;
        setCuentaMarciano(x);
    }*/
    
    public Marciano()
    {
        cuentaMarciano++;
        
        //x = 5;
    }

    /***
     * los metodos estaticos solo pueden acceder variables estaricas
     * la unica forma de acceder variables no estaticas es creando una instancia de la clase
     * @param c 
     */
    public static void setCuentaMarciano(int c)
    {
        cuentaMarciano = c;
        //Marciano m = new Marciano();
        //m.x = c;
    }
    
    public void accion()
    {
        if(cuentaMarciano >= 5)
        {
            System.out.println("Al ataque!! :@");
        }
        else
        {
            System.err.println("Retirada!! :(");
        }
    }
}
