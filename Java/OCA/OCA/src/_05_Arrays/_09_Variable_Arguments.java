package _05_Arrays;

import java.util.Arrays;

public class _09_Variable_Arguments
{
    public static void main(String... args)
    {
        System.out.println(args.length);    // 0

        print(args);                        // []
        print("Java");                      // [Java]
        print("this", "is", "my", "string", "array");   // [this, is, my, string, array]
        print("variable", "arguments", "are", "nice", "and", "useful", "feature");
                                            // [variable, arguments, are, nice, and, useful, feature]
    }

    private static void print(String... myArguments)
    {
        System.out.println(Arrays.toString(myArguments));
    }
}
