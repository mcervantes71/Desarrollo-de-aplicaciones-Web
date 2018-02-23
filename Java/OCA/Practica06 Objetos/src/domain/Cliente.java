package domain;

public class Cliente
{
    private final int id;
    private String nombre;
    private String apellido;
    private String direccion;
    private String ciudad;
    private String estado;
    private String pais;
    private String telefono;
    private String correo;
    //public String[] cuentas;
    private Cuenta[] cuentas;
    
    private static int contador;
    
    public Cliente()
    {
        id = ++contador;
    }
    
    public Cliente(String n, String a)
    {
        this();
        nombre = n;
        apellido = a;
    }

    public Cliente(String n,
                   String a, 
                   String d, 
                   String ci, 
                   String e, 
                   String p, 
                   String t, 
                   String co)
    {
        this(n, a);
        direccion = d;
        ciudad = ci;
        estado = e;
        pais = p;
        telefono = t;
        correo = co;
    }
    
    
    public void agregarCuenta(Cuenta cta)
    {
        if(cuentas == null)
        {
            cuentas = new Cuenta[1];
            cuentas[0] = cta;
        }
        else
        {
            for (Cuenta c : cuentas)
            {
                if(c.equals(cta))
                {
                    System.out.println("No se pueden agregar cuentas repetidas");
                    return;
                }
            }
            
            Cuenta[] temp = new Cuenta[cuentas.length + 1];
            System.arraycopy(cuentas, 0, temp, 0, cuentas.length);
            temp[temp.length - 1] = cta;
            cuentas = temp;
        }
    }
    
    public void getDetalles()
    {
        System.out.println("\nId: " + id);
        System.out.println("Nombre: " + nombre);
        System.out.println("Apellido: " + apellido);
        System.out.println("Direccion: " + direccion);
        System.out.println("Ciudad: " + ciudad);
        System.out.println("Estado: " + estado);
        System.out.println("Pais: " + pais);
        System.out.println("Telefono: " + telefono);
        System.out.println("Correo: " + correo);
        System.out.println("\nLista de cuentas:");
        
        if(cuentas != null)
        {
            //for(String cuenta : cuentas)
            for(Cuenta cuenta : cuentas)
            {
                //System.out.println(cuenta);
                cuenta.getDetalles();
            }
        }
    }
    
    public void depositar(Cuenta cta, double monto)
    {
        if(monto > 0)
        {
            cta.setSaldo(cta.getSaldo() + monto);
            System.out.println("Monto depositado " + monto);
            System.out.println("Saldo actual " + cta.getSaldo());
        }
        else
        {
            System.err.println("Monto debe ser mayor a 0");
        }
    }
    
    public void retirar(Cuenta cta, double monto)
    {
        if(monto > 2000)
        {
            System.err.println("Su cuenta tiene un limite de disposicion de efectivo");
        }
        else if(cta.getSaldo() < monto)
        {
            System.out.println("No cuenta con el saldo necesario");
        }
        else if(monto > 0)
        {
            if(cta instanceof Ahorros)
            {
                double comision = ((Ahorros) cta).generaComision(monto);
                cta.setSaldo(cta.getSaldo() - monto - comision);
                System.out.println("Monto retirado " + monto);
                System.out.println("Saldo actual " + cta.getSaldo());
            }
        }
        else
        {
            System.err.println("Monto debe ser mayor a 0");
        }
    }
    
    
    public double getSaldo(Cuenta cta)
    {
        return cta.getSaldo();
    }

    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    public String getApellido() {
        return apellido;
    }

    public void setApellido(String apellido) {
        this.apellido = apellido;
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

    public String getCorreo() {
        return correo;
    }

    public void setCorreo(String correo) {
        this.correo = correo;
    }

    public Cuenta[] getCuentas() {
        return cuentas;
    }

    public void setCuentas(Cuenta[] cuentas) {
        this.cuentas = cuentas;
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
