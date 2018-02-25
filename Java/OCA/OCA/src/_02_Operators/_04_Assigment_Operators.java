package _02_Operators;

public class _04_Assigment_Operators
{
    public static void main(String[] args)
    {
        // int x = 1.0;                           // does not compile
        // short y = 19812345;                    // does not compile
        // int z = 9f;                            // does not compile
        // long t = 1923012345678910;             // does not compile

        int x = (int)1.0;
        short y = (short)19812345;
        int z = (int)9f;
        long t = 1923012345678910L;

        System.out.println("x= " + x);                        //  1
        System.out.println("y= " + y);                        //  20473
        System.out.println("z= " + z);                        //  9
        System.out.println("t= " + t);                    //  1923012345678910

        // overflow and underflow with byte (-128 to 127)
        byte myByte = 127;                                    //  127
        byte mySecondByte = -128;                             //  -128

        System.out.println("myByte= " + myByte);              //  -128
        System.out.println("mySecondByte= " + mySecondByte);  //  127

        // myByte = myByte + 1;               // does not compile
        myByte++;

        // mySecondByte = mySecondByte - 1;   // does not compile
        mySecondByte--;

        System.out.println("myByte= " + myByte);              //  -128
        System.out.println("mySecondByte= " + mySecondByte);  //  127

        short a = 10;
        short b = 20;
        short c = (short)(a *  b);
        System.out.println("c= " + c);                        //  200
    }
}
