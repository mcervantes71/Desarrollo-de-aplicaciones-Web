package test;

import domain.Sucursal;
import domain.Cliente;
import domain.Banco;
import domain.Cuenta;
import domain.Ahorros;
import domain.Checkes;
import static domain.Monedas.*;
import domain.Interes;

public class testBanco
{
    public static void main(String[] args)
    {
        Banco banco = new Banco();
        
        banco.setNombre("Banorte");
        banco.setTasaInteres(3.0);
        
        //Sucursal s1 = new Sucursal();
        //s1.id = 300;
        //s1.setNombre("Torres");
        //s1.setDireccion("Av de las Torres #123");
        //s1.setCiudad("Ciudad Juarez");
        //s1.setEstado("Chihuahua");
        //s1.setPais("Mexico");
        //s1.setTelefono("656654321");
        
        Sucursal s1 = new Sucursal("Torres", 
                                   "Av de las Torres #123", 
                                   "Ciudad Juarez", 
                                   "Chihuahua",
                                   "Mexico",
                                   "656654321");
        
        //Sucursal s2 = new Sucursal();
        //s2.id = 305;
        //s2.setNombre("Misiones");
        //s2.setDireccion("Av Teofilo Borunda #123");
        //s2.setCiudad("Ciudad Juarez");
        //s2.setEstado("Chihuahua");
        //s2.setPais("Mexico");
        //s2.setTelefono("656123789");
        
        Sucursal s2 = new Sucursal("Misiones", 
                                   "Av Teofilo Borunda #123", 
                                   "Ciudad Juarez", 
                                   "Chihuahua",
                                   "Mexico",
                                   "656123789");
        
        //Cliente cl1 = new Cliente();
        //cl1.id = 1;
        //cl1.setNombre("Martin");
        //cl1.setApellido("Cervantes");
        //cl1.setDireccion("Jardin del Eden");
        //cl1.setCiudad("Ciudad Juarez");
        //cl1.setEstado("Chihuahua");
        //cl1.setPais("Mexico");
        //cl1.setCorreo("m_cervantes1@hotcackes.com");
        //cl1.setTelefono("656123456");
        
        Cliente cl1 = new Cliente("Martin",
                                  "Cervantes",
                                  "Jardin del Eden",
                                  "Ciudad Juarez",
                                  "Chihuahua",
                                  "Mexico",
                                  "m_cervantes1@hotcackes.com",
                                  "656123456");
        
        //Cliente cl2 = new Cliente();
        //cl2.id = 1;
        //cl2.setNombre("Pedro");
        //cl2.setApellido("Ramirez");
        //cl2.setDireccion("Caca del diablo");
        //cl2.setCiudad("Ciudad Juarez");
        //cl2.setEstado("Chihuahua");
        //cl2.setPais("Mexico");
        //cl2.setCorreo("p_ramirez@gmail.com");
        //cl2.setTelefono("656123456");
        
        Cliente cl2 = new Cliente("Pedro",
                                  "Ramirez",
                                  "Caca del diablo",
                                  "Ciudad Juarez",
                                  "Chihuahua",
                                  "Mexico",
                                  "p_ramirez@gmail.com",
                                  "656123456");
        
//        Cuenta cta1 = new Cuenta();
//        cta1.setNumeroCuenta(1);
//        cta1.setSaldo(1000);
//        cta1.setTipo("ahorro");
//        cta1.setModena("MXN");
//        cta1.setNumeroTarjeta("9466 4131 6515 9874");
//        cta1.setClabe("1394654132134654");
//        cta1.setFechaApertura("2015-05-25");
        

        Cuenta cta1 = new Ahorros(1,
                                 1000.0,
                                 "9466 4131 6515 9874",
                                 MXN,
                                 "1394654132134654",
                                 "2015-05-25");
        
//        Cuenta cta2 = new Cuenta();
//        cta2.setNumeroCuenta(2);
//        cta2.setSaldo(5200);
//        cta2.setTipo("cheques");
//        cta2.setModena("MXN");
//        cta2.setNumeroTarjeta("9412 8456 1002 6214");
//        cta2.setClabe("1351131649745245");
//        cta2.setFechaApertura("2012-02-02");
        
        Cuenta cta2 = new Ahorros(2,
                                 5200,
                                "9412 8456 1002 6214",
                                MXN,
                                "1351131649745245",
                                "2012-02-02");
        
//        Cuenta cta3 = new Cuenta();
//        cta3.setNumeroCuenta(1);
//        cta3.setSaldo(1000);
//        cta3.setTipo("ahorro");
//        cta3.setModena("MXN");
//        cta3.setNumeroTarjeta("9466 4131 6515 9874");
//        cta3.setClabe("1394654132134654");
//        cta3.setFechaApertura("2015-05-25");

        Cuenta cta3 = new Ahorros(1,
                                1000.0,
                                "9466 4131 6515 9874",
                                MXN,
                                "1394654132134654",
                                "2015-05-25");
        
//        Cuenta cta4 = new Cuenta();
//        cta4.setNumeroCuenta(1);
//        cta4.setSaldo(1000);
//        cta4.setTipo("ahorro");
//        cta4.setModena("MXN");
//        cta4.setNumeroTarjeta("9466 4131 6515 9874");
//        cta4.setClabe("1394654132134654");
//        cta4.setFechaApertura("2015-05-25");
        

        Cuenta cta4 = new Ahorros(1,
                                1000,
                                "9466 4131 6515 9874",
                                MXN,
                                "1394654132134654",
                                "2015-05-25");

        //int[] cuentas = {6549843, 6659549, 6465161};
        //cl.cuentas = cuentas;
        //banco.sucursales = new Sucursal[]{s1 ,s2};
        banco.agregarSucursal(s1);
        banco.agregarSucursal(s2);
        s1.agregarCliente(cl1);
        s2.agregarCliente(cl2);
        cl1.agregarCuenta(cta1);
        cl1.agregarCuenta(cta2);
        cl2.agregarCuenta(cta3);
        cl2.agregarCuenta(cta4);
        //cl1.cuentas = new Cuenta[]{cta1, cta2};
        //cl2.cuentas = new Cuenta[]{cta3, cta4};
        
        reportes.ReporteSucursales rs = new reportes.ReporteSucursales();
        
        rs.banco = banco;
        rs.generarReporte();
        
        
        System.out.println("\n* * * * *   S i m u l a c i o n * * * * *\n");
        
        cl1.depositar(cta1, 500);
        
        System.out.println(cl1.getNombre() + " " + cl1.getApellido() + " su saldo ha sido modificado!! :D\n");
        
        cl2.retirar(cta3, 50);
        
        System.out.println(cl2.getNombre() + " " + cl2.getApellido() + " su saldo ha sido modificado!! :D");
        
        Ahorros ca = new Ahorros(15,
                                 1200,
                                 "1394654132134654",
                                 MXN,
                                 "88454946513654",
                                 "2018-01-13");

        ca.getDetalles();
        
        System.out.println("* * *   C o m p a r a n d o   O b j e t o s   * * *");
        System.out.println("son iguales ?? " + ca.equals(cta3));
        
        
        /***
         * Clase Anonima
         */
        /*
        Cuenta cta_anonima =  new Cuenta(900, 900, "", "", EURO, "", "2018-01-20")
        {
            public double generaComision(double monto)
            {
                double comision = 0;
                comision =  monto * tasaComision(this.getModena());
                
                System.out.println("Cuenta anonima");
                return comision;
            }
        };*/
        
        //System.out.println("Comision sobre monto " + cta_anonima.generaComision(5000));
        
        Interes iAnonima = new Interes()
        {
            @Override
            public double generaComision(double monto)
            {
                return monto * 0.30;
            }
        };
        
        System.out.println("Comision clase anonima implementada Interes 15%");
        System.out.println("Monot: 10000");
        System.out.println("Comision: " + iAnonima.generaComision(10000));
        
        System.out.println("Comision clase anonima interes default ");
        System.out.println(
        new Interes(){}.generaComision(10000));
        
        Interes.imprimeDetalles();
    }
}
