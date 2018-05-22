package Palabras;

import java.util.ArrayList;

public class Palabras
{
    
    public void mostrarPalabras(ArrayList<String> p)
    {
        System.out.println("Las palabras con longitud par son:");
        ArrayList<String> palabras = new ArrayList<String>();
        for (String palabra : p)
        {
            if(palabra.length() % 2 == 0)
            {
                System.out.println(palabra);
            }
        }
    }
    
    public ArrayList<String> mayusculas(ArrayList<String> palabras)
    {
        System.out.println("Las palabras en mayusculas son:");
        for (String palabra : palabras)
        {
            System.out.println(palabra.toUpperCase());
        }
        
        return palabras;
    }
    
    public static void main(String[] args)
    {
        ArrayList<String> palabras = new ArrayList<String>();
        palabras.add("uno");
        palabras.add("dos");
        palabras.add("tres");
        palabras.add("cuatro");
        palabras.add("cinco");
        palabras.add("seis");
        palabras.add("siete");
        palabras.add("ocho");
        palabras.add("nueve");
        palabras.add("diez");
        
        Palabras p = new Palabras();
        
        p.mostrarPalabras(palabras);
        
        p.mayusculas(palabras);
    }
}