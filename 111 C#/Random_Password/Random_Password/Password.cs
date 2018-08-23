using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Random_Password
{
    public static class Password
    {
        public static string Generate_Password(int lenght)
        {
            string password = string.Empty;
            string[] letters = { "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "ñ", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z",
                            "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"};
            Random Random = new Random();

            for (int i = 0; i < lenght; i++)
            {
                int Random_Letter = Random.Next(0, 100);
                int Random_Number = Random.Next(0, 9);

                if (Random_Letter < letters.Length)
                {
                    password += letters[Random_Letter];
                }
                else
                {
                    password += Random_Number.ToString();
                }
            }
            return password;
        }
    }
}
