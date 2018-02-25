package _02_Operators;

public class _02_Numeric_Promotion_And_Casting
{
    public static void main(String[] args)
    {
        // promotion is converting "smaller" to "bigger" type
        int x = 5;
        double y = 10.55;

        System.out.println("x + y = " + x + y );              // 510.55
        double result = x + y;
        System.out.println("x + y = " + result);              //  15.55
        System.out.println("x + y = " + (x + y));             //  15.55

        byte b = 10;
        int c = 5;
        double d = 4.5;

        result = b + c + d;

        System.out.println("result= " + result);               //  19.5

        // casting is converting "bigger" type to "smaller" type

        double myDouble = 5.55;
        int myInt = 4 + (int)myDouble;
        System.out.println("result= " + myInt);                //  9

        int anotherInt = 125;
        byte myByte = 15;

        int intResult = anotherInt + myByte;
        byte byteResult = (byte)(anotherInt + myByte);

        System.out.println("intResult= " + intResult);         //  140
        System.out.println("byteResult= " + byteResult);       // -116 overflow

    }
}
