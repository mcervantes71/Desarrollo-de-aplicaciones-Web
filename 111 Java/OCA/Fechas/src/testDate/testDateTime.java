package testDate;

import java.time.LocalDateTime;
import java.time.LocalDate;
import java.time.LocalTime;
import java.time.Month;
import java.time.ZoneId;

public class testDateTime
{
    public static void main(String[] args)
    {
        //* * *   La Fecha y Hora actual es
        LocalDateTime hoy = LocalDateTime.now();
        System.out.println("Fecha y hora actual es " + hoy);
        
        //* * *   Crear una fecha con las Clases LocalDate y LocalTime
        LocalDateTime ldt = LocalDateTime.of(LocalDate.of(2016,Month.MARCH,23), LocalTime.of(17, 17, 17));
        
        //* * *   Crear una fecha y hora especifica
        LocalDateTime ldtEspecifico = LocalDateTime.of(2018, Month.AUGUST, 15, 13, 25, 40);
        
        //* * *   Crear una fecha y hora especifica de un Id de Zona   * * *
        LocalDateTime ldtKolkata = LocalDateTime.now(ZoneId.of("Asia/Kolkata"));
        System.out.println("Fecha y hora especifica de un Id de Zona " + ldtKolkata);
    }
}
