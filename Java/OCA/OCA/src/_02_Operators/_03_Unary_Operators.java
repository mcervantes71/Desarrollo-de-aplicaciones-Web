package _02_Operators;

public class _03_Unary_Operators
{
    public static void main(String[] args)
    {
        int x = +3; // + sign is redundant

        System.out.println("x= " + x);                         //  3

        double y = -x;
        System.out.println("x= " + x + " y= " + y);            //  3  -3.0

        y = -y; // -1 * y
        System.out.println("x= " + x + " y= " + y);            //  3   3.0

        boolean a = true;
        boolean b = !a;

        System.out.println("a= " + a + " b= " + b);             //  true  false

        b = !b;
        System.out.println("a= " + a + " b= " + b);             //  true  true

        // int myInt = !5;                        // does not compile
        // boolean myBoolean = -true;             // does not compile
        // boolean z = !0;                        // does not compile

        // increment and decrement be careful, have higher order than (+,-,*,/, ...)
        int myInt = 5;
        // myInt = myInt + 1;
        // int otherInt = myInt;
        int otherInt = ++myInt;
        System.out.println("myInt= "+myInt+" otherInt= "+otherInt);  // 6  6

        int newInt =  5;
        // int newOtherInt = newInt;
        // newInt = newInt + 1;
        int newOtherInt = newInt++;
        System.out.println("newInt="+newInt+" newOtherInt="+newOtherInt);// 6 5

        int count = 0;
        System.out.println(count);                            //  0
        System.out.println(++count);                          //  1
        System.out.println(count);                            // 1
        System.out.println(count--);              // 1 but also set count to 0
        System.out.println(count);                            // 0

        // exam questions
        int e = 3;
        int f = ++e * 5 / e-- + --e;
        // e=3
        // 4 * 5 / e-- + --e; -> ++e -> ++3 -> e=4
        // 4 * 5 / 4 + --e; -> e=3 -> e-- -> 4-- -> 3
        // 4 * 5 / 4 + 2; -> --3 -> e=2
        // 20 / 4 + 2
        // 5 + 2
        // 7
        System.out.println("e= " + e + " f= " + f);           //  2   7

        //
        int g = 6;
        int h = 2;
        int i = ++h + --g * 3 + 2 * g++ - h-- % --g;
        // h = 3 g = 6
        // 3 + --g * 3 + 2 * g++ - h-- % --g
        // h = 3, g = 5
        // 3 + 5 * 3 + 2 * g++ - h-- % --g
        // 3 + 5 * 3 + 2 * 5 - h-- % --g
        // h = 2, g = 6
        // 3 + 5 * 3 + 2 * 5 - 3 % 5
        // g=5
        // 3 + 15 + 10 - 3
        // 18 + 10 - 3
        // 28 - 3
        // 25
        System.out.println("g= " + g + " h= " + h + " i= " + i);   //  5  2  25
    }
}
