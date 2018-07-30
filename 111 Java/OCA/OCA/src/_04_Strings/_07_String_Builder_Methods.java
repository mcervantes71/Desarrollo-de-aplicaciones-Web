package _04_Strings;

public class _07_String_Builder_Methods
{
    public static void main(String[] args)
    {
        // charAt, indexOf, length, substring
        // 0 1 2 3 4 5 6 7 8 9 10
        // p r 2 o g r a m - m i n g
        StringBuilder sb = new StringBuilder("programming");

        String sub = sb.substring(sb.indexOf("g"), sb.indexOf("mi"));
        // gram

        int len = sb.length(); 						// 11
        char ch = sb.charAt(5); 					// a
        System.out.println(sub + " " + len + " " + ch);		// gram 11 a

        // append
        StringBuilder b = new StringBuilder().append(1).append("L");
        b.append("-").append(true);
        System.out.println(b);						// 1L-true

        StringBuilder builder = new StringBuilder("programming");
        builder.insert(7, "-");
        builder.insert(2, 2);
        System.out.println(builder);					// pr2ogram-ming

        // delete, deleteCharAt
        builder.delete(4, 9);
        System.out.println(builder);					// pr2oming
        builder.deleteCharAt(2);
        System.out.println(builder);					// proming

        // builder.delete(2, 1);			// does not compile
        builder.delete(1, 1); 				// does not change anything
        System.out.println(builder);					// proming

        StringBuilder sb1 = new StringBuilder("ABC123");
        sb1.reverse();
        System.out.println(sb1);					// 321CBA

        String myString = sb1.toString();
        myString = myString.toLowerCase();
        System.out.println(myString);					// 321cba
    }
}
