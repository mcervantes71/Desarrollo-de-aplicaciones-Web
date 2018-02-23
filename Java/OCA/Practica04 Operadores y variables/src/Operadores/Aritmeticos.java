package Operadores;

public class Aritmeticos
{
    public static void main(String[] args)
    {
        int a = 10, b = 11, c;
        
        System.out.println("++ prefijo");
        System.out.println("a = " + a);
        c = ++a;
        System.out.println("c = ++a (valor de c = " + c + ")");
        System.out.println("a = " + a);
        
        System.out.println("\n\nposfijo ++");
        System.out.println("b = " + b);
        c = b++;
        System.out.println("c = b++ (valor de c = " + c + ")");
        System.out.println("b = " + b);
        
        System.out.println("\n\nEjemplo:");
        System.out.println("a = " + a);
        System.out.println("b = " + b);
        c = b-- * ++a;
        System.out.println("c = b-- * ++a (valor de c " + c + ")");
        System.out.println("a = " + a);
        System.out.println("b = " + b);
        
        a = 2; b =3;
        System.out.println("a = " + a);
        System.out.println("b = " + b);
        c = ++a - b++ * --b / a;
        System.out.println(" c = ++a - b++ * --b / a (valor de c " + c + ")");
        System.out.println("a = " + a);
        System.out.println("b = " + b);
        System.out.println(++a - b++ * --b / a);
        System.out.println("a = " + a);
        System.out.println("b = " + b);
    }
}
