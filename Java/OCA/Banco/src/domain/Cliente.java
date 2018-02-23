package domain;

public class Cliente
{
    public void Rerirar(double monto, double balance)
    {
        double sobregiro = monto - balance;
        try
        {
            throw new SobreGiroException(sobregiro);
        }
        catch(SobreGiroException e)
        {
            System.out.println(e.getMessage());
        }
        finally
        {
            //nuevoBalance = cta.getBalance();
        }
    }
}
