public class Argumentos
{
    public static void main(String[] args)
    {
        if(args.length > 0)
        {
            for (String valor : args)
            {
                int x = Integer.parseInt(valor);
            }
            System.out.println(args[0]);
            System.out.println(args[1]);
            System.out.println(args[0] + args[1]);
        }
    }
}
