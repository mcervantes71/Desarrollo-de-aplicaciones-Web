package Enums;

public enum Cafe{
    /*public static final <---no es necesario ponerno, ya viene predefinido*/
    CHICO(12, 12.5),
    MEDIANO(15, 15.8),
    GRANDE(20, 21);
    
    private double precio;
    private double oz;
    
    /*private   <--- predefinido por default*/ Cafe(double p, double o)
    {
        precio = p;
        oz = o;
    }
    
    public double getPrecio()
    {
        return precio;
    }
    
    public double getOZ()
    {
        return oz;
    }
}
