
package Enums;

public class testEnums
{
    public static void pedirCafe(Cafe tamano)
    {
        switch(tamano)
        {
            case CHICO:
                System.out.println("Sirviendo " + tamano.getOZ() + "oz");
                System.out.println("Precio: $" + tamano.getPrecio());
                break;
            case MEDIANO:
                System.out.println("Sirviendo " + tamano.getOZ() + "oz");
                System.out.println("Precio: $" + tamano.getPrecio());
                break;
            case GRANDE:
                System.out.println("Sirviendo " + tamano.getOZ() + "oz");
                System.out.println("Precio: $" + tamano.getPrecio());
                break;
        }
    }
    
    public static void main(String[] args)
    {
        pedirCafe(Cafe.GRANDE);
        pedirCafe(Cafe.MEDIANO);
        pedirCafe(Cafe.CHICO);
        
        Cafe c = Cafe.CHICO;
        pedirCafe(c);
    }
}
