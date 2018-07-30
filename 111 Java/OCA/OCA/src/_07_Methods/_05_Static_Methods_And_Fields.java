package _07_Methods;

public class _05_Static_Methods_And_Fields
{
    public static int myNumber = 10;

    public static void main(String[] args)
    {        
        System.out.println(myNumber);
    }
}

class Launcher
{
    public static void main(String[] args)
    {
        _05_Static_Methods_And_Fields.main(args);
        System.out.println(_05_Static_Methods_And_Fields.myNumber);

        AnotherMain.main(args);
    }
}
    
class AnotherMain
{
    public static void main(String[] args)
    {
        System.out.println("print in another main");
    }
}
