package testDate;

import java.time.LocalTime;
import java.time.ZoneId;

public class testTime
{
    public static void main(String[] args)
    {
        //* * *   Obtener la hora actual del sistema   * * *
        LocalTime ahorita = LocalTime.now();
        System.out.println(ahorita);
        
        //* * *   Hora especifica   * * *
        LocalTime horaEspecifica = LocalTime.of(12, 20);
        System.out.println(horaEspecifica);
        
        //* * *   Tratando de crear tiempo con valores incorrectos   * * *
        //LocalTime incorrecto = LocalTime.of(25, 0);
        
        //* * * Hora actual en una zona determinada   * * *
        LocalTime kolkataTime = LocalTime.now(ZoneId.of("Asia/Kolkata"));
        System.out.println("La hora actual en Asia/Kolkata es: " + kolkataTime);
        
        LocalTime tSegundos = LocalTime.ofSecondOfDay(10000);
        System.out.println("10000seg desde el inicio es " + tSegundos);
    }
}
