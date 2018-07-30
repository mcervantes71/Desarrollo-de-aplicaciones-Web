package _04_Strings;

public class _06_String_Builder
{
    public static void main(String[] args)
    {
        String myString = "";

        for(char c = 'a'; c <= 'z'; c++) {
            myString += c; // every iteration this will create new String obj
        }

        System.out.println(myString);					// a-z

        // with string builder
        StringBuilder sb = new StringBuilder(); // create new instance of StringBuilder object

        for (char c = 'a'; c <= 'z'; c++) {
            sb.append(c); // add char to string builder, reuses string builder without creating string each time
        }

        System.out.println(sb);						// a-z

        StringBuilder builder = new StringBuilder("start");	// “start”
        builder.append("-middle"); 					// "start-middle"
        StringBuilder anotherBuilder = builder.append("-end");

        System.out.println(builder);				// start-middle-end
        System.out.println(anotherBuilder);			// start-middle-end

        System.out.println(builder == anotherBuilder);		// true
        System.out.println(System.identityHashCode(builder));	// @27134973
        System.out.println(System.identityHashCode(anotherBuilder));
        // @27134973

        StringBuilder myBuilder = new StringBuilder();
        System.out.println("size= " + myBuilder.length());		// 0
        System.out.println("capacity= " + myBuilder.capacity());	// 16

        myBuilder = new StringBuilder(100);
        System.out.println("size= " + myBuilder.length());		// 0
        System.out.println("capacity= " + myBuilder.capacity());	// 100

        myBuilder.append("MyNewTest");
        System.out.println("size= " + myBuilder.length());		// 9
        System.out.println("capacity= " + myBuilder.capacity());	// 100

        StringBuilder a = new StringBuilder("This ");
        StringBuilder b = a.append("Java ");
        b = b.append("is").append(" so ").append("Cool");
        System.out.println(a);				// This Java is so Cool
        System.out.println(b); 				// This Java is so Cool
    }
}
