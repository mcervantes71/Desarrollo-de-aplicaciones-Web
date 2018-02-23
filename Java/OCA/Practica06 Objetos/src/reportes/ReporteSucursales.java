package reportes;

import domain.*;

public class ReporteSucursales
{
    public Banco banco;
    
    public void generarReporte()
    {
        System.out.println("Banco: " + banco.getNombre());
        
        for (Sucursal sucursal : banco.getSucursales())
        {
            System.out.println("\n* * *   Sucursal " + sucursal.getId() + " " + sucursal.getNombre() + "   * * *");
            System.out.println("Lista de clientes:");
            for (Cliente cliente : sucursal.getClientes())
            {
                System.out.println("\t---> " + cliente.getId() + " " + cliente.getNombre() + " " + cliente.getApellido());
                for (Cuenta cuenta : cliente.getCuentas())
                {
                    System.out.print("\t - Numero de cuenta " + cuenta.getNumeroCuenta());
                    System.out.print(" - " +cuenta.getTipo());
                    System.out.println("\t- Saldo " + cuenta.getSaldo());
                }
            }
        }
    }
}
