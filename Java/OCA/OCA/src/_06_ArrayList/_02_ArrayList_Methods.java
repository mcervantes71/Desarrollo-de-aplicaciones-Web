package _06_ArrayList;

import java.util.List;
import java.util.ArrayList;

public class _02_ArrayList_Methods
{
    public static void main(String[] args)
    {
        // List list = new ArrayList();
        List<Object> list = new ArrayList<>();
        list.add("dog");
        list.add(5);

        System.out.println(list);

        List<String> pets = new ArrayList<>();
        pets.add("dog");
        System.out.println(pets);

        pets.add(0, "cat");
        System.out.println(pets);

        // pets.add(5);
        // 0     1
        // cat, dog
        pets.add(1, "parrot"); // cat, parrot, dog
        pets.add(0, "husky"); // husky, cat, parrot, dog
        pets.add(1, "bird"); // husky, bird, cat, parrot, dog
        System.out.println(pets);

        // remove
        pets.remove("parrot");  // husky, bird, cat, dog
        System.out.println(pets);

                pets.remove(2); // husky, bird, dog
        System.out.println(pets);

        // pets[0] = "newBird";
        pets.set(0, "newBird"); // newBird, bird, dog
        System.out.println(pets);
        // pets.set(6, "myDog"); // index out of bounds

        List<String> pets1 = new ArrayList<>();

        System.out.println(pets1.isEmpty());
        System.out.println(pets1.size());

        if(pets1.isEmpty()) {
            System.out.println("no pets");
        }

        if(pets1.size() == 0) {
            System.out.println("no pets");
        }

        pets1.add("cat");
        System.out.println(pets1.isEmpty());
        System.out.println(pets1.size());

        pets1.clear();
        System.out.println(pets1.isEmpty());
        System.out.println(pets1.size());

        pets1.add("dog");
        System.out.println(pets1.contains("cat")); // false
        System.out.println(pets1.contains("dog")); // true

        List<String> newPets = new ArrayList<>();
        newPets.add("dog");

        System.out.println(pets1.equals(newPets));

        newPets.add("cat");
        System.out.println(pets1.equals(newPets));

        pets1.add(0, "cat");
        System.out.println(pets1);
        System.out.println(newPets);

        // size and elements are equal but order of elements is not equal
        System.out.println(pets1.equals(newPets));
    }
}
