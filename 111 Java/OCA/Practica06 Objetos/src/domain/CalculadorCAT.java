package domain;

public class CalculadorCAT
{
    private double montoFinanciado;
    private double mensualidad;
    private CalcularCAT cc =  new CalcularCAT();

    public double getMontoFinanciado()
    {
        return montoFinanciado;
    }

    public void setMontoFinanciado(double mF)
    {
        montoFinanciado = mF;
    }
    
    public double getMensualidad()
    {
        return mensualidad;
    }

    public void setMensualidad(double m)
    {
        mensualidad = m;
    }
    
    
    
    private class CalcularCAT
    {
        int tiempo = 60;
        double interes = 0.9;
        double interesXmes = interes / tiempo;
        
        protected double calcularMensualidad(double montoFinanciado)
        {
            double CAT = (montoFinanciado * interesXmes) / ((1.0) - ((1.0) / Math.pow(1.0 + interesXmes, tiempo)));
            
            return Math.round(CAT);
        }
        
        protected double calcularMensualidad(double montoFinanciado, int tiempo)
        {
            
            double CAT = (montoFinanciado * interesXmes) / ((1.0) - ((1.0) / Math.pow(1.0 + interesXmes, tiempo)));
            
            return Math.round(CAT);
        }
    }
    
    public static void main(String[] args)
    {
        CalculadorCAT cal = new CalculadorCAT();
        
        cal.setMontoFinanciado(250000);
        cal.mensualidad = cal.new CalcularCAT().calcularMensualidad(cal.getMontoFinanciado());
        
        System.out.println("Monto Financiado: " + cal.getMontoFinanciado());
        System.out.println("Plazo a " + cal.cc.tiempo + " meses");
        System.out.println("Su pado mensual: " + cal.mensualidad);
        
        cal.mensualidad = cal.cc.calcularMensualidad(190000, 15);
        
        System.out.println("\n\nMonto Financiado: " + cal.getMontoFinanciado());
        System.out.println("Plazo a " + cal.cc.tiempo + " meses");
        System.out.println("Su pado mensual: " + cal.mensualidad);
    }
}
