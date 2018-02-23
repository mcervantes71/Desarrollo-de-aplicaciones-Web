package statics;

public class testMarciano
{
    public static void main(String[] args)
    {
        System.out.println("cuentaMarciano = " + Marciano.cuentaMarciano);
        
        Marciano jefeMarciano = new Marciano();
        //jefeMarciano.setCuentaMarciano(5);
        Marciano m2 = new Marciano();
        //m2.setCuentaMarciano(5);
        Marciano m3 = new Marciano();
        //m3.setCuentaMarciano(5);
        Marciano m4 = new Marciano();
        //m4.setCuentaMarciano(5);
        Marciano m5 = new Marciano();
        //m5.setCuentaMarciano(5);
        
        System.out.println("cuentaMarciano = " + Marciano.cuentaMarciano);
        jefeMarciano.accion();
    }
}
