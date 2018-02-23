package interfaces;

public interface Saludo
{
    void decirHola(String nombre);
    
    default void decirHola()
    {
        System.out.println("Hola Mundo");
    }
}

class TestInterface
{
    public static void main(String[] args)
    {
        new Saludo()
        {
            @Override
            public void decirHola(String nombre)
            {
                System.out.println("Hola " + nombre);
            }
        }.decirHola(/*"Martin"*/);
        
        Saludo s = (nombre) -> System.out.println("Hola " + nombre);
        s.decirHola("Martin");
        s.decirHola();
    }
}
/***
 *      Una expresion lambda se implementa como una clase anonima,
 * solo que esta implementa un unico metodo abstracto, de lo
 */