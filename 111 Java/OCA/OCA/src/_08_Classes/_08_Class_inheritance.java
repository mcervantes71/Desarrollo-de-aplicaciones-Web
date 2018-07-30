package _08_Classes;

class Animal1
{
    private int age;
    private String name;

    public Animal1(int age)
    {
        System.out.println("Animal");
        this.age = age;
    }

    public int getAge()
    {
        return age;
    }

    public void setAge(int age)
    {
        this.age = age;
    }

    public String getName()
    {
        return name;
    }

    public void setName(String name)
    {
        this.name = name;
    }

    public void printDetails() {
        System.out.println("name= " + name + " age= " + age);
    }
}

class Dog2 extends Animal1
{
    public Dog2(int age)
    {
        super(age);
        System.out.println("Dog");
    }
}

class Husky extends Dog2
{
    public Husky(int age)
    {
        // this();
        super(age);
        System.out.println("Husky");
    }
}

class Cat1 extends Animal1
{
    public Cat1(int age)
    {
        super(age);
    }
}

public class _08_Class_inheritance
{
    public static void main(String[] args)
    {
        Husky husky = new Husky(5);
        husky.printDetails();

        Dog2 dog = new Dog2(3);
        dog.setName("Rex");
        dog.printDetails();
    }
}
