using System;
using System.Windows.Forms;

namespace Figuras
{
    public partial class Triangulos_Lados : Form
    {
        public int lado1;
        public int lado2;
        public int lado3;

        public Triangulos_Lados()
        {
            InitializeComponent();

            lado1 = 0;
            lado2 = 0;
            lado3 = 0;
        }

        private void btn_Tipo_Click(object sender, EventArgs e)
        {
            lado1 = Convert.ToInt32(txt_lado1.Text);
            lado2 = Convert.ToInt32(txt_lado2.Text);
            lado3 = Convert.ToInt32(txt_lado3.Text);

            if(lado1 == lado2 && lado1 == lado3)
            {
                MessageBox.Show("Es un triángulo Equilátero", "Triángulo");
            }
            else if(lado1 == lado2 || lado1 == lado3 || lado2 == lado3)
            {
                MessageBox.Show("Es n triángulo Isósceles", "Triángulo");
            }
            else if(lado1 != lado2 && lado1 != lado3)
            {
                MessageBox.Show("Es un triángulo Escaleno", "Triángulo");
            }
             
        }
    }
}
