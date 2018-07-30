package _04_Strings;

public class _04_String_Methods
{
    public static void main(String[] args)
    {
        // 0 1 2 3 4 5 6 7 8 9 10
        // j a v a   i s   f u n
        String str = "java is fun";

        // length
        System.out.println("length= " + str.length());		// 11

        // char at
        System.out.println(str.charAt(0));				// j
        System.out.println(str.charAt(2)); 				// v
        System.out.println(str.charAt(6)); 				// s
        System.out.println(str.charAt(10)); 			// n

        // index of
        System.out.println(str.indexOf('a'));			// 1
        System.out.println(str.indexOf('a', 2));			// 3
        System.out.println(str.indexOf("fun"));			// 8
        System.out.println(str.indexOf("fun", 10)); // -1 match not found

        // substring
        System.out.println(str.substring(8));			// fun
        System.out.println(str.substring(0, 5));			// JAVA IS FUN
        System.out.println(str.substring(4, 4)); 		// empty string

        // System.out.println(str.substring(4, 2));  	// out of range
        // System.out.println(str.substring(8, 14)); 	// out of range

        System.out.println("AbCd".toLowerCase());			// abcd
        System.out.println(str.toUpperCase());			// JAVA IS FUN
        System.out.println(str);					// java is fun

        String dog = "Lucky";
        // dog.toUpperCase();
        dog = dog.toUpperCase();
        System.out.println(dog); 					// LUCKY

        str = "java";
        String str2 = "Java";
        String str3 = "ja";

        System.out.println(str.equals(str2));			// false
        System.out.println(str.equalsIgnoreCase(str2));		// true
        System.out.println("abc".equalsIgnoreCase("ABC")); 	// true

        // startsWith / endsWith
        System.out.println(str.startsWith("j"));			// true
        System.out.println(str.startsWith(str3));			// true
        System.out.println(str.startsWith("J".toLowerCase()));// true
        System.out.println(str.endsWith("va"));			// true

        // contains
        System.out.println(str.contains(str3));			// true
        System.out.println(str.contains("av"));			// true
        System.out.println("Java".contains("j".toUpperCase()));// true

        // replace
        String myString = "Java" + " " + "is" + " " + "cool";

        System.out.println(myString.replace('a', 'A'));		// JAvA is cool
        System.out.println(myString.replace(" ", "_"));		// Java_is_cool
        System.out.println(myString.replace("is", "_"));	// Java _ cool
        System.out.println(myString);

        // trim
        System.out.println("Java".trim());				// Java
        System.out.println(" Java is cool  ");		// " Java is cool  "
        System.out.println(" Java is cool  ".trim());		// Java is cool
    }
}
