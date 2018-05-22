package Variables;

public class TestPrimitivos
{
    public static void main(String[] args)
    {
        byte b1 = 127;
        byte b2 = -128;
        short s1 = 32767;
        short s2 = -32768;
        int i1 = 2147483647;
        int i2 = -2147483648;
        long l1 = 9223372036854775807l;
        long l2 = -9223372036854775808l;
        long l3 = 2147483648L; //long l = 2147483648l; <- L minuscula
        
        long r1 = i1 + i2;
        //short r2 = s1 + s2;

        
        System.out.println("Rango de Valores");
        System.out.println("Variables integrales(Enteros)");
        System.out.println("byte:\t(8bits)\t\t" + b1 + " a " + b2);
        System.out.println("short:\t(16bits)\t" + s1 + " a " + s2);
        System.out.println("int:\t(32bits)\t" + i1 + " a " + i2);
        System.out.println("long:\t(64bits)\t" + l1 + " a " + l2);
        
        System.out.println("\nVariables Decimales(Flotantes)");
        
        float f = 3.0f;
        double d = 3.0d;
        
        System.out.println("Float f = " + f + "F");
        System.out.println("float f = 3.0; erro de compilacion");
        System.out.println("Double d = " + d + "D");
        
        System.out.println("\nVariables Caracter");
        
        char c1 = '2';
        char c2 = 'a';
        char c3 = '@';
        char c4 = 64; //Valor en decimal segun codigo ascii
        char tap = '\t';
        char espacioBlanco = '\u0000'; //unicode hexadecimal
        
        System.out.println(c1 + " " + c2 + " " + c3 + " " + c4);
        System.out.println("*" + tap + "*");
        System.out.println(espacioBlanco + espacioBlanco + "*");
        
        
        //Entero forma binaria
        int binario = 0b101010;
        System.out.println("Binario\t101010 = " + binario);
        
        //Enteros forma octal
        int octal = 0125;
        System.out.println("Octal \t125 = " + octal);
        
        //Enteros forma hexadecimal
        int hexa = 0xAD;
        System.out.println("Hexa \tAD = " + hexa);
    }
}