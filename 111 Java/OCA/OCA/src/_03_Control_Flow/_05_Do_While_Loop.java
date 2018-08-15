package _03_Control_Flow;

public class _05_Do_While_Loop
{
    public static void main(String[] args)
    {
        int a = 0;

        do {
            a++;
        } while (false);

        System.out.println("a= " + a);                        //  1


        // does not compile
        // while (false) {
        //   a++;
        // }

        int x = 20;

        while (x > 10) x--;
        System.out.println("x= " + x);                        //  10

        int x2 = 20;

        do x2--;
        while (x2 > 10);

        System.out.println("x2= " + x2);                      // 10

        int y = 10;
        int z = 5;
        while (y < 20) {
            y++;
        }
        // y = 20
        z += 2;
        y += 10;
        // y=30
        System.out.println("x= " + x + " y= " + y + " z= " + z);  //  10  30  7

        int number = 10;

        while (number > 10) {
            number--;
        }

        do {
            number--;
            // number=9
            while (number > 5) {
                number -= 2;
                // number = 7
                // number = 5
            }
        } while (number > 10);

        System.out.println("number= " + number);              //  5
    }
}
