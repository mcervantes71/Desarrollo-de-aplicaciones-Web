using System;
using System.Collections.Generic;

namespace min_distance
{
    class Program
    {
        static void Main(string[] args)
        {
            int[] a = { 7, 1, 3, 4, 1, 7 };

            List<int> A = new List<int>();

            for (int i = 0; i < a.Length; i++)
                A.Add(a[i]);

            List<int> pairs = new List<int>();
            List<int> num = new List<int>();
            int index = 0;
            int min_distance = 100;

            for (int i = 0; i < a.Length; i++)
            {
                if (pairs.IndexOf(a[i]) == -1)
                {
                    pairs.Add(a[i]);
                    num.Add(1);
                }
                else
                {
                    index = pairs.IndexOf(a[i]);
                    num[index]++;
                }
            }

            foreach (int number in pairs)
            {
                index = pairs.IndexOf(number);

                if (num[index] % 2 == 0)
                {

                    int distance = A.LastIndexOf(number) - A.IndexOf(number);

                    if (distance < min_distance)
                        min_distance = distance;

                }
            }
        }
    }
}
