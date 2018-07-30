package _05_Arrays;

public class _05_Break_Statement_And_Labels
{
    public static void main(String[] args)
    {
        // myLabel:
        // int[] myArray = {1, 2, 3};

        myLabel:
        {
            int[] myArray = {1, 2, 3};
        }

        String[] animals = {"Dog", "Cat", "Lizard", "Bird", "Snake"};

        for(String animal : animals) {
            System.out.println(animal);
                        // Dog
                        // Cat
                        // Lizard
                        // Bird
                        // Snake

        }

        MY_LOOP: for(String animal: animals) {
            if(animal.equals("Cat")) {
                break MY_LOOP;
            }

            System.out.println(animal);				// Dog
        }

        animal: for(String animal : animals) {
            if(animal.equals("Cat")) {
                break animal;
            }

            System.out.println(animal);				// Dog
        }

        for(String animal : animals) {
            if(animal.equals("Lizard")) {
                break;
            }

            System.out.println(animal);				// Dog
        }									// Cat


        int index = 0;
        while(index < animals.length) {
            String animal = animals[index];

            if(animal.equals("Lizard")) {
                break;
            }

            System.out.println(animal);				// Dog
            index++;							// Cat
        }
    }
}
