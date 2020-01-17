using System;
using System.Collections.Generic;

namespace Pair_By_Color
{
    class Program
    {
        static void Main(string[] args)
        {
            int n = 10;
            int[] ar = { 1,1,3,1,2,1,3,3,3,3 };

            int pair = 0;
            int odds = 0;
            int index = 0;
            List<int> numbers = new List<int>();
            List<int> counters = new List<int>();


            for (int i = 0; i < n; i++)
            {
                if (numbers.IndexOf(ar[i]) == -1)
                {
                    numbers.Add(ar[i]);
                    counters.Add(1);
                }
                else
                {
                    index = numbers.IndexOf(ar[i]);
                    counters[index] += 1;
                }
            }

            foreach (int count in counters)
            {
                pair += count / 2;
                odds += count % 2;
            }

            Console.WriteLine("Pair of Socks --> " + pair);
            Console.WriteLine("Odds --> " + odds);
        }
    }
}
