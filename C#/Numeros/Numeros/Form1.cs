using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Numeros
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void comboBox2_SelectedIndexChanged(object sender, EventArgs e)
        {
            String mensaje = "";
            int factor = Convert.ToInt32(comboBox1.SelectedItem);
            int limite = Convert.ToInt32(comboBox2.SelectedItem);

            for(int i = 1; i <= limite; i++)
            {
                mensaje += factor + " x " + i + " = " + (i * factor) + "\n";
            }

            MessageBox.Show(mensaje, "Tablas de Multiplicar");
        }
    }
}
