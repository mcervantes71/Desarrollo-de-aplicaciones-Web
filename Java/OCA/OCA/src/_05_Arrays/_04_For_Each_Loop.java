package _05_Arrays;

public class _04_For_Each_Loop
{
    public static void main(String[] args)
    {
        String[] names = {"Jimmy", "John", "Tom", "Anthony"};

        for(int i = 0; i < names.length; i++) {
            System.out.println("name= " + names[i]);
        // name= Jimmy
        // name= John
        // name= Tom
        // name= Anthony
        }

        for(String name : names) {
            System.out.println("name= " + name);
        // name= Jimmy
        // name= John
        // name= Tom
        // name= Anthony

        }

        StringBuilder[] builders = {
                new StringBuilder("For"),
                new StringBuilder("Loop")
        };

        for(StringBuilder builder : builders) {
            System.out.println(builder);
                        // For
                        // Loop
        }

        for(StringBuilder builder : builders) {
            builder.append("123");
        }

        for(StringBuilder builder : builders) {
            System.out.println(builder);
        // For123
                        // Loop123
        }

        String pets = "Parrot";

        // for(String pet : pets) {} 			// does not compile

        // for(int name : names) {} 			// does not compile

        for(char c : pets.toCharArray()) {
            System.out.println(c);
                        // P
                        // a
                        // r
                        // r
                        // o
                        // t
        }
    }
}
