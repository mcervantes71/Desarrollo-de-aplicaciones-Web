using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Basketball
{
    public partial class Form1 : Form
    {
        int teamA = 0, teamB = 0;

        public Form1()
        {
            InitializeComponent();
        }

        private void unoA_Click(object sender, EventArgs e)
        {
            teamA += 1;
            lb_teamA.Text = teamA.ToString();
        }

        private void dosA_Click(object sender, EventArgs e)
        {
            teamA += 2;
            lb_teamA.Text = teamA.ToString();
        }

        private void tresA_Click(object sender, EventArgs e)
        {
            teamA += 3;
            lb_teamA.Text = teamA.ToString();
        }

        private void unoB_Click(object sender, EventArgs e)
        {
            teamB += 1;
            lb_teamB.Text = teamB.ToString();
        }

        private void dosB_Click(object sender, EventArgs e)
        {
            teamB += 2;
            lb_teamB.Text = teamB.ToString();
        }

        private void tresB_Click(object sender, EventArgs e)
        {
            teamB += 3;
            lb_teamB.Text = teamB.ToString();
        }

        private void btn_reset_Click(object sender, EventArgs e)
        {
            teamA = 0;
            teamB = 0;

            lb_teamA.Text = "0";
            lb_teamB.Text = "0";
        }
    }
}
