package _04_Strings;

public class _05_Method_Chaining
{
    public static void main(String[] args)
    {
        String start = "  Java  ";

        String trimmed = start.trim();
        System.out.println("trimmed= " + trimmed);		// Java

        String lowerCase = trimmed.toLowerCase();
        System.out.println("lowercase= " + lowerCase);		// java

        String result = lowerCase.replace('j', 'J');
        System.out.println("result= " + result);			// Java

        String anotherResult = "  Java  ".trim().toLowerCase().replace('j', 'J');
        System.out.println("anotherResult= " + result);		// Java
        System.out.println(result.equals(anotherResult));	// true

        String a = "abc";
        String b = a.toUpperCase(); 
        // produces new string does not change a variable
        String c = b.replace('B', 'b').replace('C', 'c'); 
        // produces new String
        System.out.println("a= " + a);				// abc
        System.out.println("b= " + b);				// ABC
        System.out.println("c= " + c);				// Abc

        if(a.equalsIgnoreCase(b)) {
            System.out.println("String are equal");		// printed
        }

        if(a.toLowerCase().trim().equals(b.toLowerCase().trim())) {
            System.out.println("Equal");				// printed
        }
    }
}
