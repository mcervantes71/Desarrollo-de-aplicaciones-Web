using System;
using System.Windows.Forms;

namespace Operaciones_Basicas
{
    public partial class Form1 : Form
    {
        public double numero1;
        public double numero2;
        public double resultado;

        public Form1()
        {
            InitializeComponent();

            numero1 = 0.0;
            numero2 = 0.0;
            resultado = 0.0;
        }

        private void btn_Suma_Click(object sender, EventArgs e)
        {
            numero1 = Convert.ToInt32(txt_numero1.Text);
            numero2 = Convert.ToInt32(txt_numero2.Text);

            resultado = numero1 + numero2;

            MessageBox.Show(numero1 + " + " + numero2 + " = " + resultado, "Resultado");
        }

        private void btn_Resta_Click(object sender, EventArgs e)
        {
            numero1 = Convert.ToInt32(txt_numero1.Text);
            numero2 = Convert.ToInt32(txt_numero2.Text);

            resultado = numero1 - numero2;

            MessageBox.Show(numero1 + " - " + numero2 + " = " + resultado, "Resultado");
        }

        private void btn_Mult_Click(object sender, EventArgs e)
        {
            numero1 = Convert.ToInt32(txt_numero1.Text);
            numero2 = Convert.ToInt32(txt_numero2.Text);

            resultado = numero1 * numero2;

            MessageBox.Show(numero1 + " x " + numero2 + " = " + resultado, "Resultado");
        }

        private void btn_Div_Click(object sender, EventArgs e)
        {
            numero1 = Convert.ToInt32(txt_numero1.Text);

            numero2 = Convert.ToInt32(txt_numero2.Text);

            if (numero2 == 0)
            {
                MessageBox.Show("infinito", "Resultado");
            }
            else
            {
                resultado = numero1 / numero2;

                MessageBox.Show(numero1 + " / " + numero2 + " = " + resultado, "Resultado");
            }
        }
    }
}
