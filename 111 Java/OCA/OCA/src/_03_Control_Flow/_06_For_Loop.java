
package _03_Control_Flow;

public class _06_For_Loop
{
    public static void main(String[] args)
    {
        for (int i = 0; i < 10; i++) {
            System.out.print(i + " ");            // 0 1 2 3 4 5 6 7 8 9
        }

        //        System.out.println("i= " + i);
        System.out.println();                     // prints new line sign

        int a;
        for (a = 0; a < 10; a++) {
            System.out.print(a + " ");            // 0 1 2 3 4 5 6 7 8 9 
        }

        System.out.println();
        System.out.println("after for loop a= " + a);    // 10

        // infinite/endless for loop
        //        for(;;) {
        //            System.out.println("Hello");
        //        }

        int x = 0;
        for (int y = 0, z = 4; x < 5 && y < 10; x++, y++) {
            System.out.println("y= " + y);        //  0-4
        }

        System.out.println("x= " + x);            //  5

        int d = 10;

        // for(int e = 0, d = 0; e < 10 || d < 10; e++, d--) {} // does not compile

        // for(long z = 0, int d = 4; z < 10; z++, d++) {}

        for (long z = 0; z < 10; z++) {
        }
        for (double xy = 0.0; xy < 10.5; xy += 0.5) {
        }
    }
}
