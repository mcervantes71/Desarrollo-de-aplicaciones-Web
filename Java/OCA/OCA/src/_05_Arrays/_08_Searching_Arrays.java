package _05_Arrays;

import java.util.Arrays;

public class _08_Searching_Arrays
{
    public static void main(String[] args)
    {
int[] numbers = {1, 3, 5, 6, 7};

System.out.println(Arrays.binarySearch(numbers, 2));    // -2
System.out.println(Arrays.binarySearch(numbers, 5));    // 2
System.out.println(Arrays.binarySearch(numbers, 7));    // 4
System.out.println(Arrays.binarySearch(numbers, 1));    // 0
System.out.println(Arrays.binarySearch(numbers, 3));    // 1
System.out.println(Arrays.binarySearch(numbers, 6));    // 3
System.out.println(Arrays.binarySearch(numbers, 4));    // -3

int[] notSortedNumbers = {5, 4, 10, 8, 6};

System.out.println(Arrays.binarySearch(notSortedNumbers, 5)); // 0
System.out.println(Arrays.binarySearch(notSortedNumbers, 8)); // -3

Arrays.sort(notSortedNumbers);

System.out.println(Arrays.toString(notSortedNumbers));        // [4, 5, 6, 8, 10]
System.out.println(Arrays.binarySearch(notSortedNumbers, 5)); // 1
System.out.println(Arrays.binarySearch(notSortedNumbers, 8)); // 3
    }
}
