package domain;

public class Ahorros extends Cuenta implements Interes
{
    private double tasaInteres;

    public Ahorros(int nc, 
                  double s, 
                  String nt, 
                  Monedas m,
                  String c,
                  String fa)
    {
        super(nc, s, nt, "Ahorro", m, c, fa);
    }
    
    public Ahorros(int nc, 
                  double s, 
                  String nt, 
                  String t, 
                  Monedas m,
                  String c,
                  String fa,
                  double tI)
    {
        this( nc, s, nt, m, c, fa);
        tasaInteres = tI;
    }
    
    public double getTasaInteres()
    {
        return tasaInteres;
    }

    public void setTasaInteres(double tI)
    {
        tasaInteres = tI;
    }
    
    @Override
    public void getDetalles()
    {
        System.out.println("\nNumero de cuenta: " + getNumeroCuenta());
        System.out.println("Balance: " + getSaldo());
        System.out.println("Fecha de apertura: " + getFechaApertura());
        System.out.println("Tasa de Interes: " + tasaInteres);
    }
    
    @Override
    public double generaComision(double monto)
    {
        double comision = 0;
        comision =  monto * tasaComision(this.getModena());
        return comision;
    }
}
