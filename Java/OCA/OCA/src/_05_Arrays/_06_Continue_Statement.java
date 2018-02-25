package _05_Arrays;

public class _06_Continue_Statement
{
    public static void main(String[] args)
    {
        String[] animals = {"Dog", "Cat", "Lizard", "Bird", "Snake"};

        for (String animal : animals) {
            System.out.println(animal);
                    // Dog
                    // Cat
                    // Lizard
                    // Bird
                    // Snake
        }

        MY_LOOP:
        for (String animal : animals) {
            if (animal.equals("Cat")) {
                continue MY_LOOP;
            }

            System.out.println(animal);
                    // Dog
                    // Lizard
                    // Bird
                    // Snake
        }

        animal:
        for(String animal : animals) {
            if(animal.equals("Cat")) {
                continue animal;
            }

            System.out.println(animal);
                    // Dog
                    // Lizard
                    // Bird
                    // Snake
        }

        for(String animal : animals) {
            if(animal.equals("Lizard") || animal.equals("Cat")) {
                continue;
            }

            System.out.println(animal);
                    // Dog
                    // Bird
                    // Snake
        }

        int index = 0;
        while (index < animals.length) {
            String animal = animals[index];
            index++;

            if(animal.equals("Lizard")) {
                continue;
            }

            System.out.println(animal);
                    // Dog
                    // Cat
                    // Bird
                    // Snake
        }
    }
}
