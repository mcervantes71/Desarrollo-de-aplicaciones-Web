using System;
using System.Drawing;
using System.Windows.Forms;

namespace N_Queens_by_DFS
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void btnStart_Click(object sender, EventArgs e)
        {
            try
            {
                pnlChess.Controls.Clear();

                if (txtN.Text != "")
                {
                    int N = int.Parse(txtN.Text);

                    Board board = new Board(N);

                    System.Diagnostics.Stopwatch sw = new System.Diagnostics.Stopwatch();

                    lblTime.Text = "";

                    sw.Start();

                    Board res = DFS(board);

                    sw.Stop();

                    lblTime.Text = sw.ElapsedMilliseconds.ToString() + "  MilliSecond";

                    if (res != null)
                    {
                        res.ShowBoard(pnlChess);
                    }
                    else
                    {
                        MessageBox.Show("No Result");
                    }
                }
            }
            catch
            {

            }
        }

        Board DFS(Board board)
        {
            if (board.IsGoal() == true)
            {
                return board;
            }
            else
            {
                for (int i = 0; i < board.N; i++)
                {
                    if (board.isSafe(i))
                    {
                        board.Place(i);

                        Board res = DFS(board);

                        if (res != null)
                            return res;

                        board.UnPlace();
                    }
                }
            }

            return null;
        }
    }

    class Board
    {
        public int N;
        int[] board;
        public int cnt;

        public Board(int n)
        {
            N = n;

            board = new int[N];

            for (int i = 0; i < N; i++)
                board[i] = 0;
            cnt = 0;
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
            }
            else
            {
                MessageBox.Show("Bad Column");
            }
        }

        public bool IsGoal()
        {
            if (cnt == N)
                return true;
            else
                return false;
        }

        public void UnPlace()
        {
            if (cnt > 0)
                cnt--;
        }

        public void ShowBoard(Panel pnl)
        {
            pnl.Controls.Clear();

            PictureBox[,] chess = new PictureBox[N, N];

            int w = 0, h = 0;

            w = pnl.Width;
            h = pnl.Height;

            int xs = (int)((double)w / (double)N);
            int ys = (int)((double)h / (double)N);

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
                chess[i, board[i]].Image = N_Queens_by_DFS.Properties.Resources.queen;
                chess[i, board[i]].SizeMode = PictureBoxSizeMode.StretchImage;
            }
        }

    }
}
