using System;
using System.Drawing;
using System.Windows.Forms;

namespace N_Queens
{
    public partial class Form1 : Form
    {
        public PictureBox[,] chess;

        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            cmbAlgorithm.SelectedIndex = 0;
            txtN.Focus();
            txtN.SelectAll();
        }

        private void btnSolve_Click(object sender, EventArgs e)
        {
            if (btnSolve.Text == "Start Solving")
            {
                if (Convert.ToInt32(txtN.Text) >= 4)
                {
                    cmbAlgorithm.Enabled = false;
                    
                    txtN.Enabled = false;
                    
                    btnSolve.Focus();
                    btnSolve.Text = "Stop";

                    lsbSolutions.Items.Clear();
                    Queen.Results.Clear();
                    pnlChess.Controls.Clear();

                    Queen.NumberOfQueens = int.Parse(txtN.Text);

                    long startTime = DateTime.Now.Ticks;

                    if (cmbAlgorithm.SelectedIndex == 0)
                    {
                        new Queen(0, Int32.MinValue, null).BFS();
                    }
                    else if (cmbAlgorithm.SelectedIndex == 1)
                    {
                        MessageBox.Show("DFS");
                    }
                    else if (cmbAlgorithm.SelectedIndex == 2)
                    {
                        MessageBox.Show("IS");
                    }

                    foreach (string res in Queen.Results)
                    {
                        lsbSolutions.Items.Add(res);
                    }

                    txtTime.Text = "" + (DateTime.Now.Ticks - startTime) / TimeSpan.TicksPerMillisecond;
                    txtAttempts.Text = Queen.NumberOfAttempts.ToString();
                    txtSolutions.Text = Queen.NumberOfSolutions.ToString();

                    btnSolve.PerformClick();
                }
                else
                {
                    MessageBox.Show("Solutions exist for all n queens ≥ 4", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
                    txtN.Text = "";
                    txtN.Focus();
                }
            }
            else
            {
                cmbAlgorithm.Enabled = true;
                txtN.Enabled = true;
                txtN.Focus();
                txtN.SelectAll();
                btnSolve.Text = "Start Solving";
            }
        }

        private void txtN_KeyPress(object sender, KeyPressEventArgs e)
        {
            if (!char.IsControl(e.KeyChar) && !char.IsDigit(e.KeyChar))
            {
                e.Handled = true;
            }
            else if (e.KeyChar == (char)Keys.Enter)
            {
                btnSolve.PerformClick();
            }
        }

        private void lsbSolutions_SelectedIndexChanged(object sender, EventArgs e)
        {
            string res = lsbSolutions.SelectedItem.ToString();

            pnlChess.Controls.Clear();

            chess = new PictureBox[Queen.NumberOfQueens, Queen.NumberOfQueens];

            int w = 0, h = 0;

            w = pnlChess.Width;
            h = pnlChess.Height;

            int xs = (int)((double)w / (double)Queen.NumberOfQueens);
            int ys = (int)((double)h / (double)Queen.NumberOfQueens);

            for (int i = 0; i < Queen.NumberOfQueens; i++)
                for (int j = 0; j < Queen.NumberOfQueens; j++)
                {
                    chess[i, j] = new PictureBox();
                    chess[i, j].BorderStyle = BorderStyle.FixedSingle;
                    chess[i, j].Parent = pnlChess;
                    chess[i, j].Location = new Point(j * xs + 1, i * ys + 1);
                    chess[i, j].Size = new Size(xs, ys);

                    if ((i + j) % 2 == 0)
                        chess[i, j].BackColor = Color.White;
                    else
                        chess[i, j].BackColor = Color.Black;
                }


            for (int i = 0; i < Queen.NumberOfQueens; i++)
            {
                int pos = res[i] - 97;

                chess[i, pos].Image = N_Queens.Properties.Resources.queen;
                chess[i, pos].SizeMode = PictureBoxSizeMode.StretchImage;
            }
        }
    }
}
