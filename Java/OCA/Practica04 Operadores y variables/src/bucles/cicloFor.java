package bucles;

public class cicloFor
{
    public static void main(String[] args)
    {
        int i = 0;
        for( ; i < 10; i = i++)
        {
            i++;
            System.out.println(i);
        }
        System.out.println(i);
    }
    
}
