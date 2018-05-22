using System;
using System.Windows.Forms;

namespace Figuras
{
    public partial class Form1 : Form
    {
        public int angulo1;
        public int angulo2;
        public int angulo3;

        public Form1()
        {
            InitializeComponent();

            angulo1 = 0;
            angulo2 = 0;
            angulo3 = 0;
        }

        private void btn_Tipo_Click(object sender, EventArgs e)
        {
            angulo1 = Convert.ToInt32(txt_ang1.Text);
            angulo2 = Convert.ToInt32(txt_ang2.Text);
            angulo3 = Convert.ToInt32(txt_ang3.Text);

            if (angulo1 < 90 && angulo2 < 90 && angulo3 < 90)
            {
                MessageBox.Show("Es un triángulo Acutángulo", "Triángulo");
            }
            else if(angulo1 == 90 || angulo2 == 90 || angulo3 == 90)
            {
                MessageBox.Show("Es un triángulo Rectángulo", "Triángulo");
            }
            else if (angulo1 > 90 || angulo2 > 90 || angulo3 > 90)
            {
                MessageBox.Show("Es un triángulo Obtusángulo", "Triángulo");
            }
        }
    }
}
