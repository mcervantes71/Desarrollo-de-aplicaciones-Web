#define guess

using System;

namespace EightQueensConsole
{
    public class Program
    {
        static void Main(string[] args)
        {
#if guess
            string resp = "s";
            string guess = "";
            int counter = 0;

            do
            {
                Position.NumberOfQueens = 0;
                Position.NumberOfAttempts = 0;
                Position.NumberOfNodes = 0;
                Position.NumberOfSolutions = 0;

                Console.Clear();

                Console.WriteLine("Introduce una posible solucion");
                guess = Console.ReadLine();

                Position.NumberOfQueens = guess.Length;
#endif
                long startTime = DateTime.Now.Ticks;

                new Position(0, Int32.MinValue, null).WalkThroughTree();
#if guess
                foreach (string res in Position.resultados)
                {
                    counter = 0;

                    for (int i = 0; i < guess.Length; i++)
                        if (res[i] == guess[i])
                            counter += 1;
                        else
                            counter -= 1;

                    Console.WriteLine(counter.ToString());
                }

                Position.resultados.Clear();
#endif
                Console.WriteLine("Milliseconds: " + (DateTime.Now.Ticks - startTime) / TimeSpan.TicksPerMillisecond);
                Console.WriteLine("Queens/Squares: " + Position.NumberOfQueens.ToString("#,##0"));
                Console.WriteLine("Attempts: " + Position.NumberOfAttempts.ToString("#,##0"));
                Console.WriteLine("Nodes: " + (Position.NumberOfNodes - 1).ToString("#,##0"));
                Console.WriteLine("Solutions: " + Position.NumberOfSolutions.ToString("#,##0"));
#if guess
                Console.WriteLine("\n\nDesea volver ?? (s/n)");
                resp = Console.ReadLine();
            } while (resp == "s");
#endif
            Console.WriteLine("\n\n* * *   Fin del Programa   * * *");
            Console.ReadLine();
        }
    }
}
