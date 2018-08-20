package estacionamiento;

import java.util.Scanner;

public class Estacionamiento 
{
    static Scanner teclado = new Scanner(System.in);
    static Pilas Uno = new Pilas();
    static Pilas Dos = new Pilas();
    static Pilas Tres = new Pilas();
    static Pilas Aux = new Pilas();
    static Colas A = new Colas();
    static Colas B = new Colas();
    static int opcion = 0, pila=1;

    public static void main(String[] args) 
    {
        System.out.println("Programa de Estacionamiento"
                         + "\ncon 2 Colas y 3 Pilas "
                         + "\nque Guarda 3 Autos"
                         + "\nEntrar.");
        teclado.nextLine();
        
        llegadaInicial();
        ver();
        menu();
        
        while(opcion != 3) 
        {
            casos();
        }
    }

    public static void casos() 
    {
        if(opcion == 1) 
        {
            if(Uno.contar() > 3 && Dos.contar() > 3 && Tres.contar() > 3)
            {
                ver();                
                System.out.println("----------------");
                System.out.println("El estacionamiento esta lleno");
            }
            else 
            {
                estacionarAuto();
                Llegada();
                ver();
            }
        } 
        else 
        {
            if(Uno.contar() == 0 && Dos.contar() == 0 && Tres.contar() == 0)
            {
                ver();
                System.out.println("-----------------------");
                System.err.println("NO hay autos que sacar");
            }
            else
            {
                ver();     
                sacar();
            }
        }
        menu();
    }
    
    public static int crearAuto ()
    {
        int no_auto;
        
        System.out.println("Introduce en numero del auto a ingresar");
        no_auto = teclado.nextInt();
        
        return no_auto;
    }
    
    public static void estacionarAuto() 
    {
        int selectCola = (int)(Math.random() * 2);
        int selectPila = (int)(Math.random() * 3);
        
        if (selectCola == 0)
        {
            seleccion(A, selectPila);
        }
        else
        {
            seleccion(B, selectPila);
        }
    }

    public static void Llegada() 
    {
        int select =  (int)(Math.random() * 2);

        if(select == 0) 
        {
            if(A.Contar() > 3) 
            {
                Llegada();
            } 
            else 
            {
                A.Insertar(crearAuto());
            }
        } 
        else 
        {
            if(B.Contar() > 3) 
            {
                Llegada();
            } 
            else 
            {
                B.Insertar(crearAuto());
            }
        }
    }

    public static void llegadaInicial() 
    {
        for(int i = 0; i < 8; i++) 
        {
            Llegada();
        }
    }
    
    public static void menu() 
    {
        System.out.println("Acción a realizar");
        System.out.println("1) Meter un carro al estacionamiento\n2) Sacar un carro del estacionamiento\n3) Salir");
        opcion = teclado.nextInt();
        
        if (opcion <= 1 || opcion >= 3) 
        {
            ver();     
            System.out.println("Selecciona una de las opciones");
            menu();
        }
    }
    
    public static void mostrar() 
    {
        Pilas Aux = new Pilas();
        Pilas x = new Pilas();
        Aux = Uno;
        
        while(Aux.Raiz != null) 
        {
            x.push(Aux.up());
            Aux.pop();
        }
        
        System.out.println("Pila Uno");
        x.show();
        
        Pilas y = new Pilas();
        Aux = Dos;
        
        while(Aux.Raiz != null) 
        {
            y.push(Aux.up());
            Aux.pop();
        }
        
        System.out.println("Pila Dos");
        y.show();
        
        Pilas z = new Pilas();
        Aux = Tres;
        
        while(Aux.Raiz != null) 
        {
            z.push(Aux.up());
            Aux.pop();
        }
        
        System.out.println("Pila Tres");
        z.show();

        while(x.Raiz != null) 
        {
            Uno.push(x.up());
            x.pop();
        }
        
        while(y.Raiz != null) 
        {
            Dos.push(y.up());
            y.pop();
        }
        
        while(z.Raiz != null) 
        {
            Tres.push(z.up());
            z.pop();
        }
    }
    
    public static void sacar()
    {
        System.out.println("\n\nQue número de auto decesas sacar)");
        int no_auto = teclado.nextInt();
                           
        sacando(no_auto, Aux, 1);
        ver();     
        System.out.println("El carro fue entregado");
    }
    
    public static void sacando(int no_auto, Pilas Aux, int num)
    {
        if(num == 3) 
        {
            ver();
            System.err.println("El carro no se encuentra en el estacionamiento.");
            menu();
        }
        else
        {
            Pilas P = new Pilas();
            try
            {  
                if(num == 1) P = Uno;
                if(num == 2) P = Dos;
                if(num == 3) P = Tres;
                
                while(no_auto == (P.Raiz.getValor())) 
                {
                    Aux.push(P.up());
                    P.pop();
                }
                 
                P.pop();
                ver();

                while (Aux.Raiz != null) 
                {
                    P.push(Aux.up());
                    Aux.pop();
                    ver();
                }
            }
            catch (Exception ex)
            {
                while (Aux.Raiz != null) 
                {
                    P.push(Aux.up());
                    Aux.pop();
                }
                
                if (pila != 3)
                    sacando(no_auto, Aux, num + 1);
            }
        }
    }
    
    public static void seleccion(Colas A, int selectPila) 
    {
        switch(selectPila)
        {
            case  1:
                if(Uno.contar() > 3) 
                {
                    estacionarAuto();
                    A.Extraer();
                    Uno.push(A.Raiz.getValor());
                }
                break;
            case 2:
                if(Dos.contar() > 3) 
                {
                    estacionarAuto();

                } 
                else 
                {
                    Dos.push(A.Raiz.getValor());
                    A.Extraer();
                }
                 break;
            case 3:
                if(Tres.contar() > 3) 
                {
                    estacionarAuto();
                } 
                else 
                {
                    Tres.push(A.Raiz.getValor());
                    A.Extraer();
                }
                break;
        }
    }

    public static void ver() 
    {
        System.out.println("------------------------");
        mostrar();
        
        System.out.println("Pila Auxiliar");
        Aux.show();
        
        System.out.println("\nCola Fila A");
        A.Mostrar();
        
        System.out.println("\nCola Fila B");
        B.Mostrar();
    }
}
