using System;
using System.Collections;

namespace Pair_By_Color
{
    class Program
    {
        static void Main(string[] args)
        {
            int n = 9;
            int[] ar = { 10, 20, 20, 10, 10, 30, 50, 10, 20 };

            int odds = 0;
            int index = 0;
            ArrayList numbers = new ArrayList();
            ArrayList counters = new ArrayList();


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
                    counters[index] = Convert.ToInt32(counters[index]) + 1;
                }
            }

            foreach (int count in counters)
            {
                odds += Convert.ToInt32(count) % 2;
            }

            Console.WriteLine(odds);
        }
    }
}
