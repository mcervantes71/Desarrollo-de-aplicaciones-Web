package _06_ArrayList;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.Collections;
import java.util.List;

public class _05_Sorting_ArrayList
{
    public static void main(String[] args)
    {
        List<String> numsList = new ArrayList<>();
        numsList.add("500");
        numsList.add("10");
        numsList.add("9");
        numsList.add("50");
        numsList.add("40");

        System.out.println(numsList);     // [500, 10, 9, 50, 40]
        Collections.sort(numsList);
        System.out.println(numsList);     // [10, 40, 50, 500, 9]

        List<Integer> numbers = Arrays.asList(5, 4, 8, 10, 11, 7, 3);

        System.out.println(numbers);      // [5, 4, 8, 10, 11, 7, 3]
        Collections.sort(numbers);
        System.out.println(numbers);      // [3, 4, 5, 7, 8, 10, 11]
            }
}
