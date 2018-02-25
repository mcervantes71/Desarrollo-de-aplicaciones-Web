package _02_Operators;

public class _09_Understanding_Equality_Methods
{
    public static void main(String[] args)
    {
        // comparing objects
        Integer myInteger = 127;
        Integer myAnotherInteger = 127;

        System.out.println(myInteger == myAnotherInteger);    // true

        System.out.println("128 == 128: " + (128 == 128));    // true

        System.out.println("myInteger hash: " + System.identityHashCode(myInteger));                  // @Hash 31168322
        System.out.println("myAnotherInteger hash: " + System.identityHashCode(myAnotherInteger));           // @Hash 31168322

        myInteger = 128;
        myAnotherInteger = 128;

        System.out.println("myInteger hash: " +  System.identityHashCode(myInteger));                  // @Hash 17225372
        System.out.println("myAnotherInteger hash: " + System.identityHashCode(myAnotherInteger));           // @Hash 5433634
        System.out.println("myInteger= " + myInteger);        //  128
        System.out.println("myAnotherInteger= " + myAnotherInteger);  //  128
        System.out.println(myInteger == myAnotherInteger);    // false

        // myInteger = 128;
        // Integer.valueOf(128);

        Integer int1 = new Integer(1);
        Integer int2 = new Integer(1);
        Integer int3 = 1;

        System.out.println("int1==int2: " + (int1 == int2));  // false
        System.out.println("int1==int3: " + (int1 == int3));  // false
        System.out.println("int2==int3: " + (int2 == int3));  // false

        System.out.println("int1.equals(int2): " + int1.equals(int2)); // true
        System.out.println("int1.equals(int3): " + int1.equals(int3)); // true
        System.out.println("int2.equals(int3): " + int2.equals(int3)); // true

        System.out.println("int1 hash= " + System.identityHashCode(int1));  //@
        System.out.println("int2 hash= " + System.identityHashCode(int2));  //@
        System.out.println("int3 hash= " + System.identityHashCode(int3));  //@
    }
}
