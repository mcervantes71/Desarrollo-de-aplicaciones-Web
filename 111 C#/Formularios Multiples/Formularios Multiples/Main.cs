using System;
using System.Windows.Forms;

namespace WindowsFormsApp1
{
    public partial class Main : Form
    {
        public Main()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            DialogForm testDialog = new DialogForm();


            DialogResult result = testDialog.ShowDialog();

            if(result == DialogResult.OK)
            {
                txtResult.Text = testDialog.textBox1.Text;
                txtResult.Visible = true;
                int num = testDialog.numero;
                MessageBox.Show(num.ToString());
            }
            else
            {
                this.txtResult.Text = "Cancelled";
            }

            testDialog.Dispose();
        }

        private void button2_Click(object sender, EventArgs e)
        {
            Form2 f3 = new Form2(this);

            f3.Show();

            this.Hide();
        }
    }
}
