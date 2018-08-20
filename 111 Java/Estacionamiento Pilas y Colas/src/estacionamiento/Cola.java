package estacionamiento;

public class Cola 
{
    Nodo R = null;
    Nodo RA = null;
    
    public int Contar()
    {
        Nodo A = R;
        int i = 0;
        
        while (A != null)
        {               
            A = A.getSiguiente();
            i++;
        }
        
        return i;
    }
    
    public void Extraer()
    {
        Nodo A = R;
        if (R == null)
        {
            System. out. println("La Cola se encuentra vacia, no hay nada que extraer.");
        }
        else
        {  
            R = R.getSiguiente();
            A.setSiguiente(null);
        }
    }
    
    public void ExtPrioridad(int valor)
    {
        Nodo RA = null;
       
        if(R != null)
        {
            if(R.getValor() == valor)
            {
                R = R.getSiguiente();
            }
            else
            {
                while(R != null)
                {
                    Nodo T = new Nodo(R.getValor());
                
                    if(RA == null)
                    {        
                        RA = T;
                    }
                    else
                    {
                        Nodo A = RA;
                        
                        while(A.getSiguiente()!= null)
                            A = A.getSiguiente();
                        
                        A.setSiguiente(T);
                            
                    }
                        
                    R = R.getSiguiente(); 
                       
                }
                
                R = R.getSiguiente(); 
                
                
                while(R != null)
                {
                    Nodo T = new Nodo(R.getValor());
                    
                    if(RA == null)
                    {
                        RA = T;
                    }    
                    else
                    {
                        Nodo A = RA;
                        
                        while(A.getSiguiente() != null)
                            A = A.getSiguiente();
                        
                        A.setSiguiente(T);
                            
                    }
                        
                    R = R.getSiguiente(); 
                }
                
                R = RA;
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
        Nodo T = new Nodo(valor);
        
        if(R == null)
        {
            R = T;
        }
        else
        {
            Nodo A = R;
            
            while(A.getSiguiente()!= null)
                A = A.getSiguiente();
            
            A.setSiguiente(T);
        }
        
        System.out.println("Agregar un vehiculo: " + T.getValor());
    }
        
    public void Mostrar()
    {
        Nodo A = R;
        if (A != null)
        {   
            int i = 1;
            while(A != null)
            { 
                 System.out.println("\t\t" + A.getValor());
                 A = A.getSiguiente();
                 i++;
            }
        }        
    }
}
