package _05_Arrays;

public class _03_Common_Arrays_Problems
{
    public static void main(String[] args)
    {
        int[] numbers = {1, 2, 3, 4, 5}; // 5 elements, index range 0-4

        // int[20] nums;
        int[] nums = new int[20]; 	  // size only at initialization


        // int size = numbers.length(); // does not compile length is not a method
        int size = numbers.length;

        // numbers.length = 10; 
        // does not compile you can’t set length of array, only on 
        // initialization
    }
}
