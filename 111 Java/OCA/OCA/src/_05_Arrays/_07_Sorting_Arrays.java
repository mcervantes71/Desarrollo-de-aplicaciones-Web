package _05_Arrays;

import java.util.Arrays;

public class _07_Sorting_Arrays
{
    public static void main(String[] args)
    {
        int[] numbers = {5, 10, 2};

        Arrays.sort(numbers);

        for (int i = 0; i < numbers.length; i++) {
            System.out.print(numbers[i] + " ");     // 2 5 10
        }

        System.out.println();

        System.out.println(numbers);                // [I@6d06d69c

        System.out.println(Arrays.toString(numbers));   // [2, 5, 10]

        String[] strings = {"50", "9", "500"};
        Arrays.sort(strings);
							// Sorting Alphabetical
        System.out.println(Arrays.toString(strings));   // [50, 500, 9]
    }
}
