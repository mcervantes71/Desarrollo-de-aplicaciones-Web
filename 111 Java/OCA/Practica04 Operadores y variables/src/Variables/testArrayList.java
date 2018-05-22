package Variables;

import java.util.List;
import java.util.ArrayList;

public class testArrayList
{
    public static void main(String[] args)
    {
        ArrayList<Integer> lista = new ArrayList(2);
//        lista.add("hola");
        lista.add(10);
        lista.add(15);
//        lista.add(new Object());
        
        System.out.println("Tamano lista " + lista.size());
        
        //System.out.println("Remove 15 ? "+ lista.remove(new Integer(15)));
        System.out.println("Remove 15 ? " + lista.remove(1));
        
        System.out.println("Tamano lista " + lista.size());
        
        
        List<Integer> lista2 = new ArrayList(2);
        lista2.add(10);
        lista2.add(15);
        
        System.out.println("Tamano lista " + lista2.size());
        
        //System.out.println("Remove 15 ? "+ lista2.remove(new Integer(15)));
        System.out.println("Remove 15 ? " + lista2.remove(1));
        
        System.out.println("Tamano lista " + lista2.size());
    }
}
