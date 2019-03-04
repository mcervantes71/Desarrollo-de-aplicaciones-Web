//package leer_caracter;
//
//import java.util.Scanner;
//
//public class Leer_Caracter
//{
//    public static void main(String[] args)
//    {
//        Scanner teclado = new Scanner(System.in);
//        char caracter;
//        
//        System.out.println("Dime un caracter");
//        caracter =  teclado.next().charAt(0);
//        
//        switch(caracter)
//        {
//            case 'a':
//            case 'e':
//            case 'i':
//            case 'o':
//            case 'u':
//                System.out.println("Es vocal");
//                break;
//            case '0':
//            case '1':
//            case '2':
//            case '3':
//            case '4':
//            case '5':
//            case '6':
//            case '7':
//            case '8':
//            case '9':
//                System.out.println("Es numero");
//                break;
//            case 'b':
//            case 'c':
//            case 'd':
//            case 'f':
//            case 'g':
//            case 'h':
//            case 'j':
//            case 'k':
//            case 'l':
//            case 'm':
//            case 'n':
//            case 'p':
//            case 'q':
//            case 'r':
//            case 's':
//            case 't':
//            case 'v':
//            case 'w':
//            case 'x':
//            case 'y':
//            case 'z':
//                System.out.println("Es consonante");
//                break;
//            default:
//                System.out.println("Error");
//                break;
//        }
//    }
//}

/************************************************************************************************/

//package leer_caracter;
//
//import java.util.Scanner;
//
//public class Leer_Caracter
//{
//    public static void main(String[] args)
//    {
//        Scanner teclado = new Scanner(System.in);
//        char caracter;
//        
//        System.out.println("Dime un caracter");
//        caracter =  teclado.next().charAt(0);
//        
//        if(caracter == 'a') System.out.println("Es vocal");
//        else if(caracter == 'e') System.out.println("Es vocal");
//        else if(caracter == 'i') System.out.println("Es vocal");
//        else if(caracter == 'o') System.out.println("Es vocal");
//        else if(caracter == 'u') System.out.println("Es vocal");
//        else if(caracter == '0') System.out.println("Es numero");
//        else if(caracter == '1') System.out.println("Es numero");
//        else if(caracter == '2') System.out.println("Es numero");
//        else if(caracter == '3') System.out.println("Es numero");
//        else if(caracter == '4') System.out.println("Es numero");
//        else if(caracter == '5') System.out.println("Es numero");
//        else if(caracter == '6') System.out.println("Es numero");
//        else if(caracter == '7') System.out.println("Es numero");
//        else if(caracter == '8') System.out.println("Es numero");
//        else if(caracter == '9') System.out.println("Es numero");
//        else if(caracter == 'b') System.out.println("Es consonante");
//        else if(caracter == 'c') System.out.println("Es consonante");
//        else if(caracter == 'd') System.out.println("Es consonante");
//        else if(caracter == 'f') System.out.println("Es consonante");
//        else if(caracter == 'g') System.out.println("Es consonante");
//        else if(caracter == 'h') System.out.println("Es consonante");
//        else if(caracter == 'j') System.out.println("Es consonante");
//        else if(caracter == 'k') System.out.println("Es consonante");
//        else if(caracter == 'l') System.out.println("Es consonante");
//        else if(caracter == 'm') System.out.println("Es consonante");
//        else if(caracter == 'n') System.out.println("Es consonante");
//        else if(caracter == 'p') System.out.println("Es consonante");
//        else if(caracter == 'q') System.out.println("Es consonante");
//        else if(caracter == 'r') System.out.println("Es consonante");
//        else if(caracter == 's') System.out.println("Es consonante");
//        else if(caracter == 't') System.out.println("Es consonante");
//        else if(caracter == 'v') System.out.println("Es consonante");
//        else if(caracter == 'w') System.out.println("Es consonante");
//        else if(caracter == 'x') System.out.println("Es consonante");
//        else if(caracter == 'y') System.out.println("Es consonante");
//        else if(caracter == 'z') System.out.println("Es consonante");
//        else System.out.println("Error");
//        
//    }
//}


package leer_caracter;

import java.util.Scanner;

public class Leer_Caracter
{
    public static void main(String[] args)
    {
        Scanner teclado = new Scanner(System.in);
        char caracter;
        
        System.out.println("Dime un caracter");
        caracter =  teclado.next().charAt(0);
        
        if(caracter == 97 || caracter == 101 || caracter == 105 || caracter == 111 || caracter == 117) 
            System.out.println("Es vocal");
        else if(caracter >= 48 && caracter <= 57) 
            System.out.println("Es numero");
        else if(caracter >= 98 && caracter <= 122) 
            System.out.println("Es consonante");
        else 
            System.out.println("Error");
        
    }
}