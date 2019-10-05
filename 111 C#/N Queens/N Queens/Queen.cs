using System;
using System.Collections;

namespace N_Queens
{
    class Queen
    {
        Queen parent;
        Queen queenAbove;
        int line;
        int row;

        public static int NumberOfQueens;
        public static int NumberOfAttempts;
        public static int NumberOfNodes;
        public static int NumberOfSolutions;

        public static ArrayList Results = new ArrayList();

        public Queen(int Line, int Row, Queen Parent)
        {
            line = Line;
            row = Row;
            parent = Parent;

            NumberOfNodes++;
        }

        public void BFS()
        {
            if (line == NumberOfQueens)
            {
                SaveSolution(this);
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
                    new Queen(line + 1, r, this).BFS(); // put queen on next line
            }
        }

        public void DFS()
        {

        }

        public void IS()
        {

        }

        private static void SaveSolution(Queen Node)
        {
            NumberOfSolutions++;

            string cadena = "";

            while (Node.row >= 0)
            {
                cadena += (char)('a' + Node.row);

                Node = Node.parent;
            }

            Results.Add(cadena);
        }
    }
}
