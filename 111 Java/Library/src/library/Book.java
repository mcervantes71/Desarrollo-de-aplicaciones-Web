package examen;

public class Book
{
    private String name;
    private Author[] authors;
    private double price;
    private int qty;

    public Book(String name, double price, Author... authors)
    {
        this.name = name;
        this.authors = authors;
        this.price = price;
        qty = 0;
    }

    public Book(String name, double price, int qty, Author... authors)
    {
        this.name = name;
        this.authors = authors;
        this.price = price;
        this.qty = qty;
    }

    public String getName()
    {
        return name;
    }

    public void setName(String name)
    {
        if(!name.equals(""))
            this.name = name;
    }

    public Author[] getAuthor()
    {
        return authors;
    }

    public void setAuthor(Author... authors)
    {
        this.authors = authors;
    }

    public double getPrice()
    {
        return price;
    }

    public void setPrice(int price)
    {
        if(price > 0)
            this.price = price;
    }

    public int getQty()
    {
        return qty;
    }
    
    public void setQty(int qty)
    {
        if(qty > 0)
           this.qty = qty;
    }

    public String toString()
    {
        String mensaje = "Nombre: " + name +
                         "\nPrice: $" + price +
                         "\nQty: " + qty +
                         "\nAuthors:\n";

        for (Author author : authors)
        {
            mensaje += author.getName() + "\n";
        }

        return mensaje;
    }
}
