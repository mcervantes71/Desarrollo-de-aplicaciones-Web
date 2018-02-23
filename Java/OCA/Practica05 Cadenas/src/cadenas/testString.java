package cadenas;

public class testString
{
    public static void main(String[] args)
    {
        String s0 = null;
        System.out.println(s0 + " Hola");
        
        String s1 = "Java";
        String s2 = "  Java ";
        
        s2 = s2.concat("Rules!! :D");
        System.out.println("el tamano de s1 es " + s1.length());
        System.out.println("el tamano de s2 es " + s2.length());
        System.out.println("s2 trim length " + s2.trim().length());
        System.out.println(s1.toUpperCase());
        System.out.println(s1.toLowerCase());
        System.out.println(s2);
        System.out.println(s2.substring(5));
        System.out.println(s2.substring(2, 9));
        
        
        //split
        
        System.out.println(s2.startsWith("J"));
        System.out.println(s2.endsWith("."));
        System.out.println(s2.charAt(5));
        System.out.println(s2.indexOf('a'));
        System.out.println(s2.replace("!!", "??"));
        System.out.println("Resultado " + 3 + 2 * 5);
        System.out.println(3 + 5 * 2 + " Resultado");
        System.out.println("Resultado " + (3 + 5 * 2));
    }
}
