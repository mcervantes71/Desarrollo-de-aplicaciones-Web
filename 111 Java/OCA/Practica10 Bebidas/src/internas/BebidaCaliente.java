package internas;

public class BebidaCaliente
{
    private static String nota = "Bebida Caliente";
    // clase estatica anidada
    
    public static class Te
    {
        //private static final String NOMBRE = "Te de Manzanilla";
        
        private String nombre = "Te de Limon";
        
        public void displayOutput()
        {
          System.out.println("Precaucion: " + nota);
        }
    }
    public static void main(String[] args)
    {
        //instancia de la clase estatica anidada
        BebidaCaliente.Te t = new BebidaCaliente.Te();
        
        //System.out.println(BebidaCaliente.Te.NOMBRE);
        System.out.println(t.nombre);
        
        t.displayOutput();
    }
}