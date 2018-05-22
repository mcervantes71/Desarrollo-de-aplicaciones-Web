package domain;

public interface Interes
{
    public static final String PAIS = "Mexico";
    
    /*public abstract*//* double generaComision(double monto);*/
    
    /*no puede ser static, final, ni abstract*/
    /*public only*/ default double generaComision(double monto)
    {
        return monto * 0.15;
    }
    
    /***
     * Metodos estaticos en una interfaz
     * 
     * - No se heredan en las clases que implentan la interfaz.
     * 
     * - Se asume que son publicos.
     * 
     * - Para referenciarlos, se debe usar una referencia de la interfaz.
     ***/
    /*public only*/static void imprimeDetalles()
    {
        System.out.println(PAIS);
    }
}
