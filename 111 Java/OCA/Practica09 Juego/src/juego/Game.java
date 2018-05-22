package juego;

import jugadores.Jugador;

public class Game
{
    static int getDanio(String a)
    {
        switch(a)
        {
            case "Navaja":
                return 5;
            case "Espada":
                return 6;
            case "Pistola":
                return 15;
            case "AK-47":
                return 30;
            case "Bazuka":
                return 50;
            default:
                return 2;
        }
    }
    public static void main(String[] args)
    {
        Jugador j1 = new Jugador();
        j1.setNombre("Tim");
        j1.setArma("Espada");
        
        Jugador j2 = new Jugador();
        j2.setNombre("Peter");
        j2.setArma("Bazuka");
        
        System.out.println("Jugador " + 
                            j1.getNombre() + 
                            " ataca a " + 
                            j2.getNombre() + 
                            " con \033[31m" + 
                            j1.getArma());
        
        
        j1.atacar(j2, getDanio(j1.getArma()));
        //j2.setSalud(100);
        
        System.out.println("Salud restante de Jugador " + 
                            j2.getNombre() +
                            ": " +
                            j2.getSalud());
        
        
        if(j2.getSalud() > 0)
        {
            System.out.println("Jugador " + 
                            j2.getNombre() + 
                            " ataca a " + 
                            j1.getNombre() + 
                            " con \033[31m" + 
                            j2.getArma());
        
        
        j2.atacar(j1, getDanio(j2.getArma()));
        
        System.out.println("Salud restante de Jugador " + 
                            j1.getNombre() +
                            ": " +
                            j1.getSalud());
        }
    }
}
