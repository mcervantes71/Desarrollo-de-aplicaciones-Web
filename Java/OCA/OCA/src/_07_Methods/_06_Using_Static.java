package _07_Methods;

public class _06_Using_Static
{
    private String name = "Static";

    public static void one() {}
    public static void two() {}

    public static void three()
    {
        one();
        two();
// four();
// System.out.println(name);
    }

    public void four()
    {
        one();
        two();
        three();
        System.out.println(name);
    }

    public static void main(String[] args)
    {
        _06_Using_Static.one();
        one();
        two();
        three();
// four(); // not static

        _06_Using_Static myInstance = new _06_Using_Static();
        myInstance.four();

        new _06_Using_Static().four();
    }
}

class Dog
{
    public static int count = 0;

    public static void incrementCounter()
    {
        count++;
    }
}

class DogTester
{

    public static void main(String[] args)
    {
        Dog husky = new Dog();

        System.out.println(husky.count); // warning
        System.out.println(Dog.count);

        Dog anotherDog = new Dog();
        anotherDog.incrementCounter(); // warning

        Dog.incrementCounter();

        System.out.println(Dog.count);

        husky = null;
        anotherDog = null;

        System.out.println(Dog.count);
        System.out.println(husky.count);
        System.out.println(anotherDog.count);

        Dog.count = 10;
        Dog newDog = new Dog();
        Dog dog2 = new Dog();
        newDog.count = 5;

        System.out.println(Dog.count);
        System.out.println(newDog.count);
        System.out.println(dog2.count);

        dog2.count = 11;

        System.out.println(Dog.count); // 11
        System.out.println(newDog.count);
        System.out.println(dog2.count);
    }
}

class Counter
{

    public static int count;
    public int anotherCount;

    public Counter()
    {
        count++;
        anotherCount++;
    }

    public static void main(String[] args)
    {
        Counter one = new Counter();
        Counter two = new Counter();
        Counter three = new Counter();
        Counter four = new Counter();

        System.out.println(count);
        System.out.println(one.count);
        System.out.println(two.count);
        System.out.println(three.count);
        System.out.println(four.count);

        count++;

        System.out.println(count);
        System.out.println(one.count);
        System.out.println(two.count);
        System.out.println(three.count);
        System.out.println(four.count);

        System.out.println(one.anotherCount);
        System.out.println(two.anotherCount);
        System.out.println(three.anotherCount);
        System.out.println(four.anotherCount);

        one.anotherCount = 2;
        two.anotherCount = 3;
        three.anotherCount = 4;
        four.anotherCount = 5;

        System.out.println(one.anotherCount);
        System.out.println(two.anotherCount);
        System.out.println(three.anotherCount);
        System.out.println(four.anotherCount);
    }
}

