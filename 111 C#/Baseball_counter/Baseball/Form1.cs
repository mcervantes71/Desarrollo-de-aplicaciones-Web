using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Baseball
{
    public partial class Form1 : Form
    {
        bool local = true;
        int teamA = 0;
        int teamB = 0;
        int inning = 1;
        int outs = 0;
        int strikes = 0;
        int ball = 0;

        public Form1()
        {
            InitializeComponent();
        }

        public void Mostrar()
        {
            lb_teamA.Text = teamA.ToString();
            lb_teamB.Text = teamB.ToString();
            lb_inning.Text = inning.ToString();
            lb_outs.Text = outs.ToString();
            lb_strike.Text = strikes.ToString();
            lb_ball.Text = ball.ToString();
        }

        public void Outs_Counter()
        {
            outs += 1;

            if(outs == 3)
            {
                outs = 0;
                strikes = 0;
                ball = 0;

                local = !local;

                if (local)
                {
                    inning += 1;
                    btn_score.Text = "Score\r\nTeam A";
                }
                else
                {
                    btn_score.Text = "Score\r\nTeam B";
                }
            }
        }

        private void Score_Click(object sender, EventArgs e)
        {
            if (local)
                teamA += 1;
            else
                teamB += 1;

            Mostrar();
        }

        private void Outs_Click(object sender, EventArgs e)
        {
            Outs_Counter();

            Mostrar();
        }

        private void Strikes_Click(object sender, EventArgs e)
        {
            strikes += 1;

            if(strikes == 3)
            {
                strikes = 0;
                ball = 0;
                Outs_Counter();
            }

            Mostrar();
        }

        private void Ball_Click(object sender, EventArgs e)
        {
            ball += 1;

            if(ball == 4)
            {
                strikes = 0;
                ball = 0;
            }

            Mostrar();
        }

        private void Reset_Click(object sender, EventArgs e)
        {
            btn_score.Text = "Score\r\nTeam A";

            local = true;
            teamA = 0;
            teamB = 0;
            inning = 1;
            outs = 0;
            strikes = 0;
            ball = 0;

            Mostrar();
        }
    }
}
