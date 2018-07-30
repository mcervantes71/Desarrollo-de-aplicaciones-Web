package _01_Basics;

public class _09_Understanding_Null
{
    static Object myObject = new Object();
    static Object myOtherObject;
    static String myString;

    public static void main(String[] args)
    {
        Object myLocalObject = new Object();
        Object anotherLocalObject;

        String name = "Java";
        String anotherName = null;

        System.out.println("myObject= " + myObject);           //@Hash
        System.out.println("myOtherObject= " + myOtherObject); //  null

        System.out.println("myLocalObject= " + myLocalObject); //@Hash
        // System.out.println("anotherLocalObject= " + anotherLocalObject);                                           //  null

        System.out.println("name= " + name);                   //  Java
        System.out.println("anotherName= " + anotherName);     //  null

        myString = "Java";

        System.out.println("myString= " + myString);          //  Java
        myString.toLowerCase();

        System.out.println("myString= " + myString);          //  Java
    }
}
