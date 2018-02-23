package values;

public class Ave
{
    String nombre;
    
    public Ave(String n)
    {
        nombre = n;
    }
    
    public static void main(String[] args)
    {
        Ave a1 = new Ave("Polly");
        Ave a2 = new Ave("Cipriano");
        Ave a3 = a1;
                System.out.println("\n* * *   N o m b r e s   * * *");
                System.out.println("a1 nombre: " + a1.nombre);
                System.out.println("a2 nombre: " + a2.nombre);
                System.out.println("a3 nombre: " + a3.nombre);
        a1 = null;
                System.out.println("\n* * *   N o m b r e s   * * *");
                //System.out.println("a1 nombre: " + a1.nombre);
                System.out.println("a2 nombre: " + a2.nombre);
                System.out.println("a3 nombre: " + a3.nombre);
        Ave a4 = a1;
        a3 = null;
                System.out.println("\n* * *   N o m b r e s   * * *");
                //System.out.println("a1 nombre: " + a1.nombre);
                System.out.println("a2 nombre: " + a2.nombre);
                //System.out.println("a3 nombre: " + a3.nombre);
        a2 = null;
        a2 = new Ave("Aniseto");
                System.out.println("\n* * *   N o m b r e s   * * *");
                //System.out.println("a1 nombre: " + a1.nombre);
                System.out.println("a2 nombre: " + a2.nombre);
                //System.out.println("a3 nombre: " + a3.nombre);
        System.gc();
    }
}
