package library;

public class Library
{
    public static void main(String[] args)
    {
      Author a = new Author("Diosito", "diosito@world.com", 'u');

      Book b = new Book("La Biblia", 1000000, 15, a , a);

      //System.out.println("Libro: " + b.getName() + "\nCosto: " + b.getPrice());

      System.out.println(b.toString());
    }
}
