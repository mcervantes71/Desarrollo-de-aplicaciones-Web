using System;
using System.Windows.Forms;

namespace WindowsFormsApp1
{
    public partial class DialogForm : Form
    {
        public int numero = 0;
        public DialogForm()
        {
            InitializeComponent();
        }

        private void textBox2_TextChanged(object sender, EventArgs e)
        {
            numero = Convert.ToInt32(textBox2.Text);
        }
    }
}
