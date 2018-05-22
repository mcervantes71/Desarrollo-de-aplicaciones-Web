package domain;

public enum Monedas
{
    MXN("Peso Mexicano"),
    USD("Dolar Americano"),
    CAD("Dolar Canadiense"),
    EURO("Euro");
    
    private String nombre;
    
    Monedas(String nom)
    {
        nombre = nom;
    }
    
    public String getNombre()
    {
        return nombre;
    }
}
