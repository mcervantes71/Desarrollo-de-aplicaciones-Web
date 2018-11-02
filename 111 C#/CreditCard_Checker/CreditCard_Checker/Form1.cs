using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace CreditCard_Checker
{
    public partial class Form1 : Form
    {
        bool changed = false;

        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            if (textBox1.Text == "")
                MessageBox.Show("You must enter the credit card number", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
            else if (!changed)
                MessageBox.Show("You must enter expiration date", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
            else if (textBox2.Text == "")
                MessageBox.Show("You must enter security number", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
            else
            {
                Form2 form2 = new Form2();
                form2.ShowDialog();
            }
        }

        private void dateTimePicker1_ValueChanged(object sender, EventArgs e)
        {
            changed = true;
        }
    }
}
