package estacionamiento;

public class Pilas 
{
    Nodo Raiz;
    
    public Pilas()
    {
        Raiz = null;
    }
    
    public static void main(String[] args) {
        Pilas pila = new Pilas();
        
        pila.push(99);
        
        System.out.println(pila.up());
        
        pila.push(10);
        
        pila.push(22);
        
        System.out.println(pila.contar());
        System.out.println(pila.up());
        
        pila.show();
    }
    
    public int contar()
    {
        Nodo nodoAux = Raiz;
        int i = 0;
        
        while(nodoAux != null)
        {               
            nodoAux = nodoAux.getSiguiente();
            i++;
        }
        
        return i;
    }
    
    public void pop()
    {
        Nodo nodoAux = Raiz;
        
        if (Raiz == null)
        {
            System.out.println("La pila esta vacia");
        }
        else
        {
            Raiz = Raiz.getSiguiente();
            nodoAux.setSiguiente(null);
        }
    }
    
    public void push(int valor)
    {
        
        Nodo nodo = new Nodo(valor);
        
        if (Raiz == null)
        {
            Raiz = nodo;
        }
        else
        {  
            nodo.setSiguiente(Raiz);
            Raiz = nodo;
        }
    }
     
    public void show()
    {
        Nodo nodoAux = Raiz;
                 
        if (Raiz != null)
        {
            while (nodoAux != null)
            {   
                nodoAux = nodoAux.getSiguiente();
            }
        }
    }
     
    public int up()
    {
        return Raiz.getValor();
    }
}

