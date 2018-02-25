package _01_Basics;

public class _05_Primitives_Char_And_Boolean
{
    public static void main(String[] args)
    {
        char ch = 'a';

        // char ch1 = 'ab';          // does not compile
        char ch1 = '1';
        char uniChar = '\u03A9';     // upper case greek omega character
        char romanNumber = '\u216C'; // roman 50 number

        System.out.println("ch1= " + ch1);                        //  a
        System.out.println("uniChar= " + uniChar);                //  Ω
        System.out.println("romanNumber= " + romanNumber);        //  L

        boolean myBoolean = true;
        boolean myFalseBoolean = false;

        System.out.println("myBoolean= " + myBoolean);            //  true
        System.out.println("myFalseBoolean= " + myFalseBoolean);  //  false

        //boolean true = false;                   // does not compile

    }
}
