package _06_ArrayList;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.Collections;
import java.util.List;

public class _06_Searching_ArrayList
{
    public static void main(String[] args)
    {
        List<String> numsList = new ArrayList<>();
        numsList.add("500");
        numsList.add("10");
        numsList.add("9");
        numsList.add("50");
        numsList.add("40");

        System.out.println(numsList);

        int index = Collections.binarySearch(numsList, "10");
        System.out.println(index);        // -1 undefined

        Collections.sort(numsList);
        System.out.println(numsList);     // [10, 40, 50, 500, 9]
        index = Collections.binarySearch(numsList, "10");
        System.out.println(index);        // 0

        List<Integer> numbers = Arrays.asList(5, 4, 8, 10, 11, 7, 3);
        System.out.println(numbers);      // [5, 4, 8, 10, 11, 7, 3]

        index = Collections.binarySearch(numbers, 7);
        System.out.println(index);        // -3 undefined

        Collections.sort(numbers);
        System.out.println(numbers);      // [3, 4, 5, 7, 8, 10, 11]

        index = Collections.binarySearch(numbers, 7);
        System.out.println(index);        // 3
    }
}
