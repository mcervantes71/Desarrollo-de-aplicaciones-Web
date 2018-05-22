package _02_Operators;

public class _08_Equality_Operators
{
    public static void main(String[] args)
    {
        int a = 5;
        int b = 3;
        boolean c = a == b;                                   // false
        boolean d = a != b;                                   // true

        System.out.println("a= " + a);                        //  5
        System.out.println("b= " + b);                        //  3
        System.out.println("c= " + c);                        //  false
        System.out.println("d= " + d);                        //  true

        // boolean g = true == 0;             // does not compile
        // boolean h = false != "test";       // does not compile

        boolean x = true;
        boolean y = false;
        boolean z = (y = true) && (x = false);

        System.out.println("x= " + x);                        // false
        System.out.println("y= " + y);                        // true
        System.out.println("z= " + z);                        // false
    }
}
