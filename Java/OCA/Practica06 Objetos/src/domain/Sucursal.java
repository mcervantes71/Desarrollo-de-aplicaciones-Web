package domain;

public class Sucursal
{
    private final int id;
    private String nombre;
    private String direccion;
    private String ciudad;
    private String estado;
    private String pais;
    private String telefono;
    //public String[] clientes;
    private Cliente[] clientes;
    private static int contador;
    
    public Sucursal()
    {
        id = ++contador;
    }

    public Sucursal(String n, 
                    String d, 
                    String c, 
                    String e, 
                    String p, 
                    String t)
    {
        this();
        nombre = n;
        direccion = d;
        ciudad = c;
        estado = e;
        pais = p;
        telefono = t;
    }
    
    public void agregarCliente(Cliente s)
    {
        if(clientes == null)
        {
            clientes = new Cliente[1];
            clientes[0] = s;
        }
        else
        {
            Cliente[] temp = new Cliente[clientes.length + 1];
            System.arraycopy(clientes, 0, temp, 0, clientes.length);
            temp[temp.length - 1] = s;
            setClientes(temp);
        }
    }
    
    public void getDetalles()
    {
        System.out.println("\nId: " + id);
        System.out.println("Nombre: " + nombre);
        System.out.println("Direccion: " + direccion);
        System.out.println("Ciudad: " + ciudad);
        System.out.println("Estado: " + estado);
        System.out.println("Pais: " + pais);
        System.out.println("Telefono: " + telefono);
        System.out.println("\nLista de clientes:");
        
        //for (String cliente : clientes)
        for (Cliente cliente : clientes)
        {
            //System.out.println(cliente);
            cliente.getDetalles();
        }
        
    }

    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    public String getDireccion() {
        return direccion;
    }

    public void setDireccion(String direccion) {
        this.direccion = direccion;
    }

    public String getCiudad() {
        return ciudad;
    }

    public void setCiudad(String ciudad) {
        this.ciudad = ciudad;
    }

    public String getEstado() {
        return estado;
    }

    public void setEstado(String estado) {
        this.estado = estado;
    }

    public String getPais() {
        return pais;
    }

    public void setPais(String pais) {
        this.pais = pais;
    }

    public String getTelefono() {
        return telefono;
    }

    public void setTelefono(String telefono) {
        this.telefono = telefono;
    }

    public Cliente[] getClientes() {
        return clientes;
    }

    private void setClientes(Cliente... cli) {
        if(cli != null)
        {
            clientes = cli;
        }
    }
    
    public static int getContador() {
        return contador;
    }

    public static void setContador(int aContador) {
        contador = aContador;
    }

    public int getId() {
        return id;
    }
}
