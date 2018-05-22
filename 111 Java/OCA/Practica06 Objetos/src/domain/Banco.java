package domain;

public class Banco
{

    private String nombre;
    private double tasaInteres;
    //public String[] sucursales;
    private Sucursal[] sucursales;

    public String getNombre()
    {
        return nombre;
    }

    public void setNombre(String n)
    {
        if(n != null)
            nombre = n;
    }

    public double getTasaInteres()
    {
        return tasaInteres;
    }

    public void setTasaInteres(double ti)
    {
        if(ti > 0 && ti <= 100)
        {
            tasaInteres = ti;
        }
    }

    public Sucursal[] getSucursales()
    {
        return sucursales;
    }

    private void setSucursales(Sucursal... s)
    {
        if(s != null)
        {
            sucursales = s;
        }
    }
    
    public void agregarSucursal(Sucursal s)
    {
        if(sucursales == null)
        {
            sucursales = new Sucursal[1];
            sucursales[0] = s;
        }
        else
        {
            Sucursal[] temp = new Sucursal[sucursales.length + 1];
            System.arraycopy(sucursales, 0, temp, 0, sucursales.length);
            temp[temp.length - 1] = s;
            setSucursales(temp);
        }
    }
    
    public void getDetalles()
    {
        System.out.println("\nNombre: " + nombre);
        System.out.println("Tasa de interes: " + tasaInteres);
        System.out.println("Sucursales: ");
        System.out.println("\nLista de sucursales:");
        
        //for (String sucursal : sucursales)
        for (Sucursal sucursal : sucursales)
        {
            //System.out.println(sucursal);
            sucursal.getDetalles();
        }
    }
}
