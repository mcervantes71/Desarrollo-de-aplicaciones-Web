package Operadores;

public class Asignacion
{
    public static void main(String[] args)
    {
        int a = 1;
        int b = 3;
        int c = 0;
        
        System.out.println("a = " + a);
        System.out.println("b = " + b);
        System.out.println("c = " + c);
        c = ++a * b;
        System.out.println("resultado ---> c = ++a * b ---> " + c);
        
        System.out.println("\n\n");
        System.out.println("a = " + a);
        System.out.println("b = " + b);
        System.out.println("c = " + c);
        a += c;     // a = a + c
        System.out.println("resuldato ---> a += c      ---> " + a);
        
        System.out.println("\n\n");
        System.out.println("a = " + a);
        System.out.println("b = " + b);
        System.out.println("c = " + c);
        b *= c;     // b = b * c
        System.out.println("resuldato ---> b *= c      ---> " + b);
        
        System.out.println("\n\n");
        System.out.println("a = " + a);
        System.out.println("b = " + b);
        System.out.println("c = " + c);
        c /= a;     // c = c / a
        System.out.println("resuldato ---> c /= a      ---> " + c);
        
        System.out.println("\n\n");
        System.out.println("a = " + a);
        System.out.println("b = " + b);
        System.out.println("c = " + c);
        c %= a;    // c = c % a
        System.out.println("resuldato ---> c %= a      ---> " + c);      
    }
}
