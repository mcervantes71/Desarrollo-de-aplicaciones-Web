package estacionamiento;

public class Nodo 
{
    private int valor;
    private Nodo siguiente;
    
    public Nodo(int valor)         
    {
        this.valor = valor;
        siguiente = null;        
    }
    
    
    public void setSiguiente(Nodo siguiente)
    {
        this.siguiente = siguiente;
    }
    
    public Nodo getSiguiente()
    {
      return siguiente;
    }     
    
    public void setValor(int valor)
    {
        this.valor = valor;
    }
    
    public int getValor()
    {
        return valor;
    }
}
