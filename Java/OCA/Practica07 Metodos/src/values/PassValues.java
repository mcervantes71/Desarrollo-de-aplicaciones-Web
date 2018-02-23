package values;

public class PassValues
{
    public int p = 5;
    
    public void setP(int p)
    {
        p++;
        System.out.println("Dentro del metodo p = " + p);
    }
    
    public static void main(String[] args)
    {
        PassValues pv = new PassValues();
        
        int p = 15;
        
        pv.setP(p);
        
        System.out.println("p en main: " + p);
        System.out.println("p en PassValues: " + pv.p);
    }
}
