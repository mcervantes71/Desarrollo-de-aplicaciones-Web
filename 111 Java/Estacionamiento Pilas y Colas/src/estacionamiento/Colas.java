package estacionamiento;

public class Colas 
{
    Nodo Raiz;
    Nodo raizAux;
    
    public Colas()
    {
        Raiz = null;
        raizAux = null;
    }
    
    public int Contar()
    {
        Nodo nodoAux = Raiz;
        int i = 0;
        
        while (nodoAux != null)
        {               
            nodoAux = nodoAux.getSiguiente();
            i++;
        }
        
        return i;
    }
    
    public void Extraer()
    {
        Nodo nodoAux = Raiz;
        if (Raiz == null)
        {
            System. out. println("La Cola se encuentra vacia, no hay nada que extraer.");
        }
        else
        {  
            Raiz = Raiz.getSiguiente();
            nodoAux.setSiguiente(null);
        }
    }
    
    public void ExtPrioridad(int valor)
    {
        Nodo nodoRaizAux = null;
       
        if(Raiz != null)
        {
            if(Raiz.getValor() == valor)
            {
                Raiz = Raiz.getSiguiente();
            }
            else
            {
                while(Raiz != null)
                {
                    Nodo T = new Nodo(Raiz.getValor());
                
                    if(nodoRaizAux == null)
                    {        
                        nodoRaizAux = T;
                    }
                    else
                    {
                        Nodo A = nodoRaizAux;
                        
                        while(A.getSiguiente()!= null)
                            A = A.getSiguiente();
                        
                        A.setSiguiente(T);
                            
                    }
                        
                    Raiz = Raiz.getSiguiente(); 
                       
                }
                
                Raiz = Raiz.getSiguiente(); 
                
                
                while(Raiz != null)
                {
                    Nodo T = new Nodo(Raiz.getValor());
                    
                    if(nodoRaizAux == null)
                    {
                        nodoRaizAux = T;
                    }    
                    else
                    {
                        Nodo A = nodoRaizAux;
                        
                        while(A.getSiguiente() != null)
                            A = A.getSiguiente();
                        
                        A.setSiguiente(T);
                    }
                        
                    Raiz = Raiz.getSiguiente(); 
                }
                
                Raiz = nodoRaizAux;
            }
            
            System.out.println("Se extrae el nodo de la cola.\n");
        }
        else
        {
            System.out.println("Nada que extraer.");
        }
            
    }
    
    public void Insertar(int valor)
    {
        Nodo nodo = new Nodo(valor);
        
        if(Raiz == null)
        {
            Raiz = nodo;
        }
        else
        {
            Nodo nodoAux = Raiz;
            
            while(nodoAux.getSiguiente()!= null)
                nodoAux = nodoAux.getSiguiente();
            
            nodoAux.setSiguiente(nodo);
        }
        
        System.out.println("Agregar un vehiculo: " + nodo.getValor());
    }
        
    public void Mostrar()
    {
        Nodo nodoAux = Raiz;
        if (nodoAux != null)
        {   
            int i = 1;
            while(nodoAux != null)
            { 
                 System.out.println("\t\t" + nodoAux.getValor());
                 nodoAux = nodoAux.getSiguiente();
                 i++;
            }
        }        
    }
}
