using System;
using System.Windows.Forms;

namespace Calc
{
    public partial class Form1 : Form
    {
        private Boolean punto;
        private Boolean nuevo;
        private double number;
        private String op;

        public Form1()
        {
            InitializeComponent();

            punto = false;
            nuevo = true;
            number = 0;
            op = "";
        }

        private void Operation()
        {
            switch (op)
            {
                case "+":
                    number += Double.Parse(textBox1.Text);
                    break;
                case "-":
                    number -= Double.Parse(textBox1.Text);
                    break;
                
            }
        }

        private void Clear()
        {
            punto = false;
            nuevo = true;

            textBox1.Text = "0.";
        }

        private void Number_Click(object sender, EventArgs e)
        {
            Button btn_number = (Button)sender;
            String num = btn_number.Text;

            if (punto)
            {
                textBox1.Text += num;
            }
            else
            {
                if (nuevo)
                {
                    nuevo = false;
                    textBox1.Text = num + ".";
                }
                else
                {
                    Char[] cadena = textBox1.Text.ToCharArray();
                    cadena[cadena.Length - 1] = num[0];
                    textBox1.Text = String.Join("", cadena) + ".";
                }
            }
        }

        private void btn_clear_Click(object sender, EventArgs e)
        {
            number = 0;
            Clear();
        }

        private void btn_punto_Click(object sender, EventArgs e)
        {
            punto = true;
        }

        private void Operator_Click(object sender, EventArgs e)
        {
            Button btn_operator = (Button)sender;
            op = btn_operator.Text;

            Operation();

            Clear();
        }

        private void igual_Click(object sender, EventArgs e)
        {
            Operation();

            textBox1.Text = number.ToString();

            nuevo = true;
            punto = false;
            number = 0;
        }
    }
}
