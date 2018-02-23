package testDate;

import java.time.Period;
import java.time.LocalDate;
import java.time.temporal.TemporalAdjusters;

public class testPeriods
{
    public static void main(String[] args)
    {
        LocalDate hoy = LocalDate.now();
    
        //* * *   Para crear un periodo de tiempo tiene que ser con LocalDate solamente   * * *
        Period periodo = hoy.until(hoy.with(TemporalAdjusters.lastDayOfYear()));

        System.out.println("El periodo abarca " + periodo);
    }
}
