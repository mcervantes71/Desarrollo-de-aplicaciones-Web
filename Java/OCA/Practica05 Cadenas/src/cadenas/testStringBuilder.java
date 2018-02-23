package cadenas;

public class testStringBuilder
{
    public static void main(String[] args)
    {
        StringBuilder sb1 = new StringBuilder("StringBuilder");
        StringBuilder sb2 = new StringBuilder("StringBuilder");
        
        /***
         *    El == en strings compara la direccion de los objetos
         */
        if(sb1 == sb2)
            System.out.println("sb1 es identico a sb2");
        
        /***
         *    El metodo equals se usa para comparar el contenido
         * pero no funciona en StringBuilder
         */
        if(sb1.equals(sb2))//no va funciona
            System.out.println("sb1 tiene los mismos datos que sb2");
        
        
        /***
         *    Para hacer una comparacion del contenido se tiene que convertir a string
         */
        if(sb1.toString().equals(sb2.toString()))
            System.out.println("sb1 tiene los mismos datos que sb2");
        
        sb1.append(" de Java :D");
        System.out.println(sb1);
        
        sb2.insert(0, "Como usar insert en ").insert(sb2.length(), " en Java :D");
        System.out.println(sb2);
        
        sb2.delete(5, 10);
        System.out.println(sb2);
        
        System.out.println(sb2.substring(5, sb2.length())); //subSecuence
        
        System.out.println(sb2.replace(5, 11, "reemplazar"));
        
        System.out.println(sb2.reverse());
    }
}
