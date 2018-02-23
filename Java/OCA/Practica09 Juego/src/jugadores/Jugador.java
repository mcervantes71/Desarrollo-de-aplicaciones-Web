package jugadores;

public class Jugador
{
    private String nombre;
    private int salud = 20;
    private String arma;
    
    public String getNombre()
    {
        return nombre;
    }

    public void setNombre(String n)
    {
        if(n != null)
        {
            nombre = n;
        }
    }
    
    public int getSalud()
    {
        return salud;
    }

    public void setSalud(int s)
    {
        if(s <= 20)
        {
            salud = s;
        }
    }
    
    public String getArma()
    {
        return arma;
    }

    public void setArma(String a)
    {
        if(a != null)
        {
            arma = a;
        }
    }
    
    public void atacar(Jugador j, int danio)
    {
        j.salud -= danio;
        if(j.salud <= 0)
        {
            System.out.println("Jugador " + j.nombre + " KO :(");
        }
    }
}
