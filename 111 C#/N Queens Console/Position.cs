#define guess

using System;
using System.Collections;

namespace EightQueensConsole
{
    public class Position
    {
#if guess
        public static int NumberOfQueens;
        public static ArrayList resultados = new ArrayList();
#else
        public static int NumberOfQueens = 8;
#endif
        public static int NumberOfAttempts, NumberOfNodes, NumberOfSolutions;
        private static Position queenAbove;
        private int line, row;
        private Position parent;

        public Position(int Line, int Row, Position Parent)
        {
            line = Line;
            row = Row;
            parent = Parent;
            NumberOfNodes++;
        }

        public void WalkThroughTree()
        {
            if (line == NumberOfQueens) 
            {
                PrintSolution(this);
                return;
            }

            for (var r = 0; r < NumberOfQueens; r++) 
            {
                NumberOfAttempts++;
                queenAbove = this;
                while (queenAbove.row >= 0 && r != queenAbove.row // vertical
                        && r - queenAbove.row != line + 1 - queenAbove.line // diagonal left
                        && queenAbove.row - r != line + 1 - queenAbove.line) // diagonal right
                    queenAbove = queenAbove.parent; // repeat check for all queens in previous lines
                        if (queenAbove.line == 0) // no threat found
                            new Position(line + 1, r, this).WalkThroughTree(); // put queen on next line
            }
        }

        private static void PrintSolution(Position Node)
        {
            NumberOfSolutions++;

            string cadena = "";

            while (Node.row >= 0)
            {
                cadena += (char)('a' + Node.row);

                Node = Node.parent;
            }

            Console.WriteLine(cadena);
#if guess
            resultados.Add(cadena);
#endif
        }
    }
}
