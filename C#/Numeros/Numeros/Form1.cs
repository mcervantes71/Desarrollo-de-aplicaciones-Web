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

        private void comboBox1_SelectedIndexChanged(object sender, EventArgs e)
        {
            String mensaje = "";
            int numero = Convert.ToInt32(comboBox1.SelectedItem);
            int total = 1;

            for(int i = 1; i <= numero; i++)
            {
                total *= i;
            }

            MessageBox.Show(total.ToString(), "Tablas de Multiplicar");
        }
    }
}
