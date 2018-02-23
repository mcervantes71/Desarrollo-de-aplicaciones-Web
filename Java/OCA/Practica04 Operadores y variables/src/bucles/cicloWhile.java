package bucles;

public class cicloWhile
{
    public static void main(String[] args)
    {
        int x = 0;
        while(x++ < 10)
        {
            System.out.println((x > 10 ?"Mayor que": false) + "" + x);
        }
        
        
        int y = 1, z = 15;
        do{
            y--;
            z++;
            
            System.out.println(y + ", " + z);
        }while(y > 1);
    }
}
