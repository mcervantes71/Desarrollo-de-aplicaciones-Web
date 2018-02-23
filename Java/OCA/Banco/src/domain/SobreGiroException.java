package domain;

public class SobreGiroException extends Exception
{
    public SobreGiroException(double monto)
    {
        super("Cuenta Sobregirada por: " + monto);
    }
}
