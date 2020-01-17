using System;
using System.Collections;

namespace Running_Tracking
{
    class Program
    {
        static void Main(string[] args)
        {
            int n = 8;
            string s = "UDDDUDUU";

            Stack mountain = new Stack();
            Stack valley = new Stack();

            int num_mountains = 0, num_valleis = 0;
            int height = 0, depth = 0;
            int sea_level = 0;

            for (int i = 0; i < n; i++)
            {
                if (s[i] == 'U')
                {
                    sea_level++;

                    if (sea_level <= 0)
                    {
                        valley.Pop();
                    }
                }
                else if (s[i] == 'D')
                {
                    sea_level--;

                    if (sea_level < 0)
                    {
                        valley.Push("D");
                    }
                }

                if (valley.Count == 0 && sea_level == 0 && s[i] == 'U')
                    num_valleis++;

                Console.WriteLine(num_valleis);
            }
        }
    }
}
