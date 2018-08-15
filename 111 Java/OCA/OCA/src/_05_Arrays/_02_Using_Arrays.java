package _05_Arrays;

import java.util.Arrays;

public class _02_Using_Arrays
{
    public static void main(String[] args)
    {
        String[] pets = {"parrot", "cat", "dog"};

        System.out.println(pets[0]);					// parrot
        System.out.println(pets[1]);					// cat
        System.out.println(pets[2]);					// dog
        // System.out.println(pets[3]); // throws Array Index Out Of Bounds since we only have 3 elements

        pets[0] = "bird";

        // range of index [0-2], 0 - length - 1
        for (int i = 0; i < pets.length; i++) {
            System.out.println(pets[i]);
                // bird
                // cat
                // dog
        }

        for (int i = 0; i <= pets.length - 1; i++) {
            System.out.println(pets[i]);
                // bird
                // cat
                // dog
        }

        System.out.println(pets);					// @19e0bfd

        System.out.println(Arrays.toString(pets));	// [bird, cat, dog]

        int[] numbers = new int[5];
        System.out.println(Arrays.toString(numbers));	// [0, 0, 0, 0, 0]

        String[] newPets = new String[5];
        System.out.println(Arrays.toString(newPets));	// [null, n, n, n, n]

        for (int i = 0; i < numbers.length; i++) {
            // 1. iteration i = 0
            // numbers[0] = 0 + 10 -> 10
            // 2. iteration i = 1
            // numbers[1] = 1 + 10 -> 11
            // 3. iteration i = 2
            // numbers[2] = 2 + 10 -> 12
            // 4. iteration i = 3
            // numbers[3] = 3 + 10 -> 13
            // 5. iteration i = 4
            // numbers[4] = 4 + 10 -> 14
            numbers[i] = i + 10;
        }

        for (int i = 0; i < numbers.length; i++) {
            System.out.println("numbers[" + i + "]= " + numbers[i]);
        }							

        System.out.println(numbers);
        System.out.println(Arrays.toString(numbers)); // [10, 11, 12, 13, 14]

        Integer[] nums = new Integer[4];
        System.out.println(Arrays.toString(nums));    // [null, n, n, n]

        for (int i = 0; i < nums.length; i++) {
            // 1. iteration 0 -> 0 % 3 = 0
            // 2. iteration 1 -> 1 % 3 = 1
            // 3. iteration 2 -> 2 % 3 = 2
            // 4. iteration 3 -> 3 % 3 = 0
            nums[i] = i % 3;
        }

        System.out.println(Arrays.toString(nums)); 	// [0, 1, 2, 0]
    }
}
