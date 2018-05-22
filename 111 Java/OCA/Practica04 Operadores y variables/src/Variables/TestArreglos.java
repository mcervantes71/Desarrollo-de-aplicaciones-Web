package Variables;

public class TestArreglos
{
    public static void main(String[] args)
    {
        /*String[] nombre = {"Martin",
                            "Abraham",
                            "Arturo",
                            "Juan",
                            "Azael",
                            "Kevin",
                            "Polo",
                            "Griselda"};*/
        
        String[] nombre = new String[8];
        nombre[0] = "Martin";
        nombre[1] = "Abraham";
        nombre[2] = "Arturo";
        nombre[3] = "Juan";
        nombre[4] = "Azael";
        nombre[5] = "Kevin";
        nombre[6] = "Polo";
        nombre[7] = "Griselda";
        
        for(int i = 0; i < 8; i++)
            System.out.println(nombre[i]);
        
        System.out.println("\n* * * * * * * * * * * * * * * * * * * *\n");
        
        String[] name = new String[2];
        name[0] = "John";
        name[1] = "Melanie";
        
        for(int i = 0; i < name.length; i++)
            System.out.println(name[i]);
        
        System.out.println("\n* * * * * * * * * * * * * * * * * * * *\n");
        
        name = nombre;
        
        for(int i = 0; i < name.length; i++)
            System.out.println(name[i]);

	System.out.println("\n* * * * * * * * * * * * * * * * * * * *\n");
	System.out.println("Iterando elemntos del arreglo");
	for(String n : nombre)
	    System.out.println(n);
    }
}
