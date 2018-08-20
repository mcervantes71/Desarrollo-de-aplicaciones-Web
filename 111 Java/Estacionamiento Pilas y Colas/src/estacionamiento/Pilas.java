package estacionamiento;

public class Pilas 
{
    Nodo R = null;
    
    public int contar()
    {
        Nodo A = R;
        int i = 0;
        
        while(A != null)
        {               
            A = A.getSiguiente();
            i++;
        }
        
        return i;
    }
    
    public void pop()
    {
        Nodo A = R;
        
        if (R == null)
        {
            System.out.println("La pila esta vacia");
        }
        else
        {
            R = R.getSiguiente();
            A.setSiguiente(null);
        }
    }
    
    public void push(int valor)
    {
        
        Nodo T = new Nodo(valor);
        
        if (R == null)
        {
            R = T;
        }
        else
        {  
            T.setSiguiente(R);
            R = T;
        }
    }
     
    public void show()
    {
        Nodo A = R;
                 
        if (R != null)
        {
            while (A != null)
            {   
                A = A.getSiguiente();
            }
        }
    }
     
    public int up()
    {
        return R.getValor();
    }
}

