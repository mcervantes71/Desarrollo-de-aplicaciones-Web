package testDate;

import java.time.LocalDate;
import java.time.format.FormatStyle;
import java.time.format.DateTimeFormatter;
import java.util.Locale;

public class testDateTimeFormater
{
    public static void main(String[] args)
    {
        Locale loc_mx = new Locale("es");
        Locale.setDefault(loc_mx);
        
        LocalDate hoy = LocalDate.now();
        
        DateTimeFormatter dtf = DateTimeFormatter.ofLocalizedDate(FormatStyle.FULL);
        DateTimeFormatter dtf_lg = DateTimeFormatter.ofLocalizedDate(FormatStyle.LONG);
        DateTimeFormatter dtf_md = DateTimeFormatter.ofLocalizedDate(FormatStyle.MEDIUM);
        DateTimeFormatter dtf_sm = DateTimeFormatter.ofLocalizedDate(FormatStyle.SHORT);
        
        System.out.println(hoy.format(dtf));
        System.out.println(hoy.format(dtf_lg));
        System.out.println(hoy.format(dtf_md));
        System.out.println(hoy.format(dtf_sm));
        
        //M = 1, MM = 01, MMM = Jan, MMMM = January
        //dd
        //yyyy = 2018, yy = 18
        //hh = 24, h =
        DateTimeFormatter dtfp = DateTimeFormatter.ofPattern("MMMM - DD, YYYY");
        System.out.println(hoy.format(dtfp));
        
        
    }
}
