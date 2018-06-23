using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Score_Keeper
{
    public partial class Form1 : Form
    {
        int points1 = 0;
        int points2 = 0;
        int points_limit = 5;

        public Form1()
        {
            InitializeComponent();
        }

        void Revisar()
        {
            if (points1 == points_limit || points2 == points_limit)
            {
                btn_equipo1.Enabled = false;
                btn_equipo2.Enabled = false;
            }

            lb_puntos.Text = points1 + " - " + points2;
        }

        void Reset()
        {
            points1 = 0;
            points2 = 0;

            lb_puntos.Text = "0 - 0";

            btn_equipo1.Enabled = true;
            btn_equipo2.Enabled = true;
        }

        private void btn_equipo1_Click(object sender, EventArgs e)
        {
            points1++;

            Revisar();
        }

        private void btn_equipo2_Click(object sender, EventArgs e)
        {
            points2++;

            Revisar();
        }

        private void btn_reset_Click(object sender, EventArgs e)
        {
            Reset();
        }

        private void txt_limite_KeyPress(object sender, KeyPressEventArgs e)
        {
            if (!Char.IsDigit(e.KeyChar))
            {
                Reset();

                points_limit = Convert.ToInt32(txt_limite.Text);
                e.Handled = true;
            }
            else
            {
                e.Handled = false;
            }

            if (e.KeyChar == (char)Keys.Enter)
                btn_equipo1.Focus();
        }

        private void txt_limite_Enter(object sender, EventArgs e)
        {
            txt_limite.SelectAll();
        }
    }
}
