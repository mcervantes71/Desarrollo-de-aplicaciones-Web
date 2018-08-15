package _04_Strings;

public class _03_String_Poll_And_String_Equality
{
    public static void main(String[] args)
    {
        String name = "John";
        String anotherName = "John";
        String john = "Jo" + "hn"; 			// "John"
        String newName = new String("John");

        System.out.println("name == anotherName -> " + (name == anotherName));
        // true
        System.out.println("name == john -> " + (name == john));
        // true
        System.out.println("name == newName -> " + (name == newName));
        // false
        System.out.println("name.equals(anotherName) -> " + name.equals(anotherName));
        // true
        System.out.println("name.equals(john) -> " + name.equals(john));
        // true
        System.out.println("name.equals(newName) -> " + name.equals(newName));
        // true
        System.out.println("name - identityHashCode -> " + System.identityHashCode(name));
        // @Hash Code 27134973
        System.out.println("anotherName - identityHashCode -> " + System.identityHashCode(anotherName));
        // @Hash Code 27134973
        System.out.println("john - identityHashCode -> " + System.identityHashCode(john));
        // @Hash Code 27134973
        System.out.println("newName - identityHashCode -> " + System.identityHashCode(newName));
        // @Hash Code 1284693


        String str1 = "abc";
        String str2 = "ab";
        // String str3 = "ab" + "c";
        String str3 = str2 + "c";

        System.out.println(System.identityHashCode(str1));    // @31168322 
        System.out.println(System.identityHashCode(str2));    // @17225372
        System.out.println(System.identityHashCode(str3));    // @5433634

        System.out.println(str1 == str2);				// false
        System.out.println(str1 == str3);				// false
    }
}
