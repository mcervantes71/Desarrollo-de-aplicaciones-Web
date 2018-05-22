package _01_Basics;

public class _10_Primitive_Wrapper_Types
{
    public static void main(String[] args)
    {
        int myInt = 10;

        //  Wrapper Class
        Integer myInteger = 10;            
        Integer myInteger2 = 20;
        Integer myInteger3 = Integer.valueOf(10);
        Integer myInteger4 = Integer.parseInt("3");
        Integer myInteger5 = null;
        //int myInt2 = null;                 // does not compile

        System.out.println("myInteger= " + myInteger);     //  10
        System.out.println("myInteger2= " + myInteger2);   //  20
        System.out.println("myInteger3= " + myInteger3);   //  10
        System.out.println("myInteger4= " + myInteger4);   //  3 
        System.out.println("myInteger5= " + myInteger5);   //  null

        // converting wrapper to primitive -> unboxing
        int myInt3 = myInteger3; // unboxing;
        // int myInt4 = myInteger5; // throws null pointer exception, primitives cant contain null

        // boxing -> converting primitive to wrapper
        Integer myInteger6 = new Integer(10);
        Integer myInteger7 = myInt;


        printSum(1, 5); // autoboxing
        printSum(myInteger, myInteger2);

    }

    private static void printSum(Integer first, Integer second) {
        Integer sum = first + second;
        System.out.println("sum= " + sum);
    }

}
