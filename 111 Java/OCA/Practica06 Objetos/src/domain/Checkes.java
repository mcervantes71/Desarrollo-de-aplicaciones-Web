package domain;

public class Checkes extends Cuenta
{
    private double sobreGiro;

    public Checkes(int nc, 
                  double s, 
                  String nt, 
                  Monedas m,
                  String c,
                  String fa)
    {
        super(nc, s, nt, "Cheques", m, c, fa);
    }
    
    public Checkes(int nc, 
                  double s, 
                  String nt, 
                  Monedas m,
                  String c,
                  String fa,
                  double sG)
    {
        this(nc, s, nt, m, c, fa);
        sobreGiro = sG;
    }
    
    public double getSobreGiro()
    {
        return sobreGiro;
    }

    public void setSobreGiro(double sG)
    {
        sobreGiro = sG;
    }
    
    @Override
    public void getDetalles()
    {
        System.out.println("\nNumero de cuenta: " + getNumeroCuenta());
        System.out.println("Balance: " + getSaldo());
        System.out.println("Fecha de apertura: " + getFechaApertura());
        System.out.println("Sobre Giro: " + sobreGiro);
    }
    
//    @Override
//    public double generaComision(double monto)
//    {
//        double comision = 0;
//        return comision;
//    }
}