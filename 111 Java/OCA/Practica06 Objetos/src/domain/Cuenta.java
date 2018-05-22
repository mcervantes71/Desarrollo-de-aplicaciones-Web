package domain;

import java.util.Objects;

public abstract class Cuenta /*extends Object*/ 
{
    private int numeroCuenta;
    private double saldo;
    private String numeroTarjeta;
    private String tipo;
    private Monedas modena;
    private String clabe;
    private String fechaApertura;

    public Cuenta()
    {
        
    }
    
    public Cuenta(int nc, 
                  double s, 
                  String nt, 
                  String t, 
                  Monedas m,
                  String c,
                  String fa)
    {
        numeroCuenta = nc;
        saldo = s;
        numeroTarjeta = nt;
        tipo = t;
        modena = m;
        clabe = c;
        fechaApertura = fa;
    }
    
    //public abstract double generaComision(double monto);
    
    public void getDetalles()
    {
        System.out.println("\nNumero de cuenta: " + numeroCuenta);
        System.out.println("Balance: " + saldo);
        System.out.println("Numero de tarjeta: " + numeroTarjeta);
        System.out.println("Tipo de cuenta: " + tipo);
        System.out.println("Modena: " + modena);
        System.out.println("Clabe: " + clabe);
        System.out.println("Fecha de apertura: " + fechaApertura);
    }

    public int getNumeroCuenta() {
        return numeroCuenta;
    }

    public void setNumeroCuenta(int numeroCuenta) {
        this.numeroCuenta = numeroCuenta;
    }

    public double getSaldo() {
        return saldo;
    }

    public void setSaldo(double saldo) {
        this.saldo = saldo;
    }

    public String getNumeroTarjeta() {
        return numeroTarjeta;
    }

    public void setNumeroTarjeta(String numeroTarjeta) {
        this.numeroTarjeta = numeroTarjeta;
    }

    public String getTipo() {
        return tipo;
    }

    public void setTipo(String tipo) {
        this.tipo = tipo;
    }

    public Monedas getModena() {
        return modena;
    }

    public void setModena(Monedas modena) {
        this.modena = modena;
    }

    public String getClabe() {
        return clabe;
    }

    public void setClabe(String clabe) {
        this.clabe = clabe;
    }

    public String getFechaApertura() {
        return fechaApertura;
    }

    public void setFechaApertura(String fechaApertura) {
        this.fechaApertura = fechaApertura;
    }
    
    @Override
    public boolean equals(Object o)
    {
        boolean result = false;
        
        if(o != null && o instanceof Cuenta)
        {
            Cuenta other = (Cuenta)o;
            if(this.numeroCuenta == other.numeroCuenta  && this.numeroTarjeta.equals(other.numeroTarjeta))
            {
                result = true;
            }
        }
        
        return result;
    }

    @Override
    public int hashCode()
    {
        int hash = 3;
        
        hash = 67 * hash + this.numeroCuenta;
        hash = 67 * hash + Objects.hashCode(this.numeroTarjeta);
        
        return hash;
    } 
    
    public double tasaComision(Monedas moneda)
    {
        double tasa;
        
        switch(moneda)
        {
            case MXN:
                tasa = 0.0375;
                break;
            case USD:
                tasa = 4.5 / 100;
                break;
            case CAD:
                tasa = 3.9 / 100;
                break;
            case EURO:
                tasa = 5.6 / 100;
                break;
            default:
                tasa = 3 / 100;
                break;
        }
        
        return tasa;
    }
}
