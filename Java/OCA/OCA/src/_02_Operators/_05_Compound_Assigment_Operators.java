package _02_Operators;

class _05_Compound_Assigment_Operators
{
    public static void main(String[] args)
    {
        int x = 2;
        int z = 3;

        x = x * z; // simple assignment
        x *= z; // shorter form of x = x * z

        System.out.println("x= " + x);                        //  18

        // int a += 5;                        // does not compile

        // without explicit cast
        long a = 10;
        int b = 4;
        // b = b * a;                         // does not compile
        // b = (int)(b * a);

        b *= a; // short for of b = (int)(b * a);
        System.out.println("b= " + b);                        //  40

        long c = 4;
        long d = (c = 2); // shorter form of c = 2; long d = c;

        System.out.println("c= " + c + " d= " + d);           //  2  2

        long e = 3;
        long f = 2;
        long h = 1;

        long i = e + 3 * (f = 3) - (h -= 2);
        // f = 3;
        // e + 3 * 3 - (-1) -> (h-=2) -> also sets h=-1 // h = h - 2;
        // e + 3 * 3 + 1
        // 3 + 9 + 1
        // 13


        System.out.println("e= " + e);                        //  3
        System.out.println("f= " + f);                        //  3
        System.out.println("h= " + h);                        //  -1
        System.out.println("i= " + i);                        //  13
    }
}
