package _01_Basics;

public class _08_Variable_Scope
{
    static int myNewInt = 5;      // GOBAL VARIABLE

    public static void main(String[] args)
    {
        int myLocalInt = 10;  //LOCAL VARIABLE

        {
            {
                int myOtherInt = 10;
                {
                    int myOtherInt2 = 20;
                }
            }
            int myOtherInt = 20;
            int anotherInt = 30;
            System.out.println("myOtherInt= " + myOtherInt);     //  20
            System.out.println("inCodeBlock myLocalInt= " + myLocalInt);                                                     //  10
        }

        //System.out.println("myOtherInt= " + myOtherInt);  // does not compile
        System.out.println("myLocalInt= " + myLocalInt);         //  10
        System.out.println("myNewInt= " + myNewInt);             //  5

        //System.out.println("myOtherInt= " + myOtherInt);  // does not compile

        int myOtherInt = 30;
        int anotherInt = 40;

        System.out.println("myOtherInt= " + myOtherInt);         //  30
        System.out.println("anotherInt= " + anotherInt);         //  40
    }

}
