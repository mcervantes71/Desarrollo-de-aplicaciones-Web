using System;
using System.Windows.Forms;

namespace Gato
{
    public partial class Form1 : Form
    {
        String turno = "O";

        public Form1()
        {
            InitializeComponent();
        }

        void Revisar()
        {
            if ((button1.Text == "O" && button2.Text == "O" && button3.Text == "O") ||
                (button4.Text == "O" && button5.Text == "O" && button6.Text == "O") ||
                (button7.Text == "O" && button8.Text == "O" && button9.Text == "O") ||
                (button1.Text == "O" && button4.Text == "O" && button7.Text == "O") ||
                (button2.Text == "O" && button5.Text == "O" && button8.Text == "O") ||
                (button3.Text == "O" && button6.Text == "O" && button9.Text == "O") ||
                (button1.Text == "O" && button5.Text == "O" && button9.Text == "O") ||
                (button3.Text == "O" && button5.Text == "O" && button7.Text == "O"))
                {
                    Deshabilitar();
                    MessageBox.Show("Tenemos un ganador");
                }

            if ((button1.Text == "X" && button2.Text == "X" && button3.Text == "X") ||
                (button4.Text == "X" && button5.Text == "X" && button6.Text == "X") ||
                (button7.Text == "X" && button8.Text == "X" && button9.Text == "X") ||
                (button1.Text == "X" && button4.Text == "X" && button7.Text == "X") ||
                (button2.Text == "X" && button5.Text == "X" && button8.Text == "X") ||
                (button3.Text == "X" && button6.Text == "X" && button9.Text == "X") ||
                (button1.Text == "X" && button5.Text == "X" && button9.Text == "X") ||
                (button3.Text == "X" && button5.Text == "X" && button7.Text == "X"))
                {
                    Deshabilitar();
                    MessageBox.Show("Tenemos un ganador");
                }

            if (turno == "O")
                turno = "X";
            else
                turno = "O";
        }

        void Habilitar()
        {
            foreach (Control c in this.Controls)
                if (c is Button)
                    if (c.Text != "Reset")
                        c.Enabled = true;
        }

        void Deshabilitar()
        {
            foreach (Control c in this.Controls)
                if (c is Button)
                    if (c.Text != "Reset")
                        c.Enabled = false;
        }


        private void Buttons_Click(object sender, EventArgs e)
        {
            Button myButton = (Button)sender;

            if (myButton.Text == "")
            {
                myButton.Text = turno;
                Revisar();
            }
        }

        private void Reset_Click(object sender, EventArgs e)
        {
            turno = "O";

            foreach (Control c in this.Controls)
                if (c is Button)
                    if (c.Text != "Reset")
                        c.Text = "";

            Habilitar();
        }
    }
}
