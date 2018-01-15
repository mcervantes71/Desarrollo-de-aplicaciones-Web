using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace IMC
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void Calcular(object sender, EventArgs e)
        {
            double peso = Convert.ToSingle(textBox1.Text);
            double estatura = Convert.ToSingle(textBox2.Text);

            double imc = peso / (estatura * estatura);

            if(imc < 20)
            {
                MessageBox.Show("Su IMC = " + imc + "\nBajo Peso", "IMC", MessageBoxButtons.OK, MessageBoxIcon.Exclamation);
            }
            else if (imc < 25)
            {
                MessageBox.Show("Su IMC = " + imc + "\nPeso Normal", "IMC", MessageBoxButtons.OK, MessageBoxIcon.Information);
            }
            else if (imc < 30)
            {
                MessageBox.Show("Su IMC = " + imc + "\nSobre Peso", "IMC", MessageBoxButtons.OK, MessageBoxIcon.Exclamation);
            }
            else if (imc < 35)
            {
                MessageBox.Show("Su IMC = " + imc + "\n1o de Obesidad", "IMC", MessageBoxButtons.OK, MessageBoxIcon.Stop);
            }
            else if (imc < 40)
            {
                MessageBox.Show("Su IMC = " + imc + "\n2o de Obesidad", "IMC", MessageBoxButtons.OK, MessageBoxIcon.Stop);
            }
            else if(imc <= 40)
            {
                MessageBox.Show("Su IMC = " + imc + "\n3o de Obesidad", "IMC", MessageBoxButtons.OK, MessageBoxIcon.Stop);
            }
        }
    }
}
