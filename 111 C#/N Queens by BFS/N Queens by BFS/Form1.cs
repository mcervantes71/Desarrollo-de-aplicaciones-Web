using System;
using System.Collections;
using System.Drawing;
using System.Windows.Forms;

namespace NQueens_by_BFS
{
    public partial class Form1 : Form
    {
        int N;
        Board board;
        Queue Q;

        public Form1()
        {
            InitializeComponent();
        }

        private void btnSolve_Click(object sender, EventArgs e)
        {
            try
            {
                pnlChess.Controls.Clear();

                if (txtN.Text != "")
                {
                    N = int.Parse(txtN.Text);

                    board = new Board(N);
                    board.ShowBoard(this.pnlChess, false);

                    Q = new Queue();
                    Q.Enqueue(board);

                    timerStep.Enabled = true;
                }
            }
            catch
            {

            }
        }

        private void timerStep_Tick(object sender, EventArgs e)
        {
            if (!(Q.Count == 0))
            {
                board = (Board)Q.Dequeue();
                board.ShowBoard(pnlChess, true);

                if (board.IsGoal() == true)
                {
                    timerStep.Enabled = false;
                }
                else
                {
                    for (int i = 0; i < N; i++)
                    {
                        Board bb = board.CopyBoard();

                        if (bb.isSafe(i))
                        {
                            bb.Place(i);
                            Q.Enqueue(bb);
                        }
                    }

                }
            }
            else
                timerStep.Enabled = false;


        }

        private void btnStop_Click(object sender, EventArgs e)
        {
            timerStep.Enabled = false;
        }
    }

    class Board
    {
        public int N;
        long key;
        int[] board;
        int cnt;

        public long GetStateKey
        {
            get
            {
                return key;
            }
        }

        private void CalcStateKey()
        {
            key = cnt * 100;

            for (int i = 0; i < N; i++)
                if (isSafe(i))
                {
                    key += 50;
                }
        }

        public Board(int n)
        {
            N = n;
            board = new int[N];

            for (int i = 0; i < N; i++)
                board[i] = 0;

            cnt = 0;
            key = 0;
        }

        public bool isSafe(int Clm)
        {
            for (int i = 0; i < cnt; i++)
                if ((board[i] == Clm) || Math.Abs(Clm - board[i]) == (cnt - i))
                    return false;

            return true;
        }

        public void Place(int Clm)
        {
            if (Clm >= 0 && Clm < N)
            {
                board[cnt] = Clm;
                cnt++;
                CalcStateKey();
            }
            else
            {
                MessageBox.Show("Bad Column");
            }
        }

        public bool IsGoal()
        {
            if (cnt == N)
            {
                return true;
            }
            else
                return false;
        }

        public void UnPlace()
        {
            if (cnt > 0)
            {
                cnt--;
                CalcStateKey();
            }
        }

        public Board CopyBoard()
        {
            Board newBoard = new Board(N);
            newBoard.cnt = this.cnt;
            newBoard.key = this.key;

            for (int i = 0; i < N; i++)
                newBoard.board[i] = board[i];

            return newBoard;
        }

        public void ShowBoard(Panel pnl, bool JustQueen)
        {
            int w = 0, h = 0;
            w = pnl.Width;
            h = pnl.Height;

            int xs = (int)((double)w / (double)N);
            int ys = (int)((double)h / (double)N);

            if (JustQueen == false)
            {
                pnl.Controls.Clear();
                PictureBox[,] chess = new PictureBox[N, N];

                for (int i = 0; i < N; i++)
                    for (int j = 0; j < N; j++)
                    {
                        chess[i, j] = new PictureBox();
                        chess[i, j].BorderStyle = BorderStyle.FixedSingle;
                        chess[i, j].Parent = pnl;
                        chess[i, j].Location = new Point(j * xs + 1, i * ys + 1);
                        chess[i, j].Size = new Size(xs, ys);

                        if ((i + j) % 2 == 0)
                            chess[i, j].BackColor = Color.White;
                        else
                            chess[i, j].BackColor = Color.Black;
                    }

                for (int i = 0; i < cnt; i++)
                {
                    chess[i, board[i]].Image = NQueens_by_BFS.Properties.Resources.queen;
                    chess[i, board[i]].SizeMode = PictureBoxSizeMode.StretchImage;
                }
            }

            for (int i = 0; i < pnl.Controls.Count; i++)
            {
                if (pnl.Controls[i].Tag != null)
                    if (pnl.Controls[i].Tag.ToString() == "q")
                    {
                        pnl.Controls.RemoveAt(i);
                        i--;
                    }
            }

            PictureBox[] Queens = new PictureBox[cnt];

            for (int i = 0; i < cnt; i++)
            {
                Queens[i] = new PictureBox();
                Queens[i].Tag = "q";
                Queens[i].BorderStyle = BorderStyle.FixedSingle;
                Queens[i].Parent = pnl;
                Queens[i].Location = new Point(board[i] * xs + 1, i * ys + 1);
                Queens[i].Size = new Size(xs, ys);
                Queens[i].Image = NQueens_by_BFS.Properties.Resources.queen;
                Queens[i].SizeMode = PictureBoxSizeMode.StretchImage;

                pnl.Controls.Add(Queens[i]);
                Queens[i].BringToFront();
            }

        }
    }
}