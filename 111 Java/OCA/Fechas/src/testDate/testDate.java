package testDate;

import java.time.LocalDate;
import java.time.Month;
import java.time.ZoneId;
import java.time.temporal.TemporalAdjusters;
import java.util.Set;

public class testDate
{
    public static void main(String[] args)
    {
        //* * *   Obtener la fecha actual   * * *
        LocalDate hoy = LocalDate.now();
        
        System.out.println("Hoy es " + hoy);
        
        //* * *   Obtener fecha especifica   * * *
        //LocalDate ld = LocalDate.of(2018, Month.APRIL, 30);
        LocalDate ld = LocalDate.of(2018, 4, 30);
        
        System.out.println("Fecha especifica: " + ld);
        
        //* * *   Tratando de crear fechas con valor invalido   * * *
        // No permite asignar valores con fechas falsas ooo no existentes
        // Mismo caso con los años bisiestos
        //LocalDate feb29_17 = LocalDate.of(2017, Month.FEBRUARY, 29);
        
        System.out.println("Es el " + ld.getYear() + " año bisiesto ?? " + ld.isLeapYear());
        
        //* * *   Comprar si una fecha esta antes ooo despues de otra   * * *
        System.out.println("Hoy es antes del 2018-02-01 ?? " + hoy.isBefore(LocalDate.of(2018,Month.FEBRUARY,1)));
        
        //* * *   Operaciones con fechas   * * *
        System.out.println("En 10 dias sera: " + hoy.plusDays(10));
        System.out.println("En 3 Semanas sera: " + hoy.plusWeeks(3));
        System.out.println("En 20 Meses sera: " + hoy.plusMonths(20));
        System.out.println("Hace 10 Dias fue: " + hoy.minusDays(10));
        System.out.println("Hace 3 Semamas fue: " + hoy.minusWeeks(3));
        System.out.println("Hace 20 Meses fue: " + hoy.minusMonths(20));
        
        //* * *   Para poder obtener el ultimo dia ooo primer dia de...   * * *
        LocalDate ultimoDiaEnero = hoy.with(TemporalAdjusters.lastDayOfMonth());
        System.out.println("Ultimo dia de enero: " + ultimoDiaEnero);
        
        LocalDate ultimoDiaAño = hoy.with(TemporalAdjusters.lastDayOfYear());
        System.out.println("Ultimo dia del año: " + ultimoDiaAño);
        
        //* * *   Fecha actual de acuerdo a una zona horario
        LocalDate hoyKolkata = LocalDate.now(ZoneId.of("Asia/Kolkata"));
        System.out.println("Fecha actual en Asia/Kolkata: " + hoyKolkata);
        
        
        System.out.println("* * * * * * * * * * * * * * * * * * * *");
        System.out.println("* * *   Zonas Horarias Disponibles   * * *");
        Set<String> zones = ZoneId.getAvailableZoneIds();
        
        for (String zone : zones)
        {
            System.out.println(zone);
        }
        System.out.println("* * * * * * * * * * * * * * * * * * * *");
    }
}
