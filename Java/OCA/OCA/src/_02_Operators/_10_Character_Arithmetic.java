package _02_Operators;

public class _10_Character_Arithmetic
{
    public static void main(String[] args)
    {
        // char 0 - 65535
        char myCharA = 'A';
        char myCharNum = '1';

        System.out.println("myCharA= " + myCharA);            //  A
        System.out.println("myCharA isLetter = " + Character.isLetter(myCharA));                         // true
        System.out.println("myCharA isDigit = " +
        Character.isDigit(myCharA));                          // false

        System.out.println("myCharNum= " + myCharNum);        // 1
        System.out.println("myCharNum isLetter= " + Character.isLetter(myCharNum));                       //  false
        System.out.println("myCharNum isDigit= " + Character.isDigit(myCharNum));                        // true

        // exam examples
        char letter = 65; // A + 1 -> B (66) + 1 -> C(67) + 1 -> D (68)
        int myInt = letter + 3;
        char myNewLetter = (char)myInt;

        System.out.println("letter= " + letter);              //  A
        System.out.println("myInt= " + myInt);                //  68
        System.out.println("myNewLetter= " + myNewLetter);    //  D

        char myChar = 65;                  // A
        char newChar = (char)(myChar + 1); // 66 -> B
        boolean b = newChar == 'B';        // true
        boolean c = (newChar++ < 'D');     // 67 < 68 // true

        System.out.println("myChar= " + myChar);              //  A
        System.out.println("newChar= " + newChar);            //  C
        System.out.println("b= " + b);                        //  true
        System.out.println("c= " + c);                        //  true
    }
}
