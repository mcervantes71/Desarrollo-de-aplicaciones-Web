using System;
using System.Diagnostics;
using System.Windows.Forms;

namespace CreditCard_Checker
{
    public partial class Form2 : Form
    {
        Random random = new Random();
        DialogResult result;

        int value = 0;
        int total = 0;

        public Form2()
        {
            InitializeComponent();
        }

        private void Form2_Load(object sender, EventArgs e)
        {
            timer1.Enabled = true;
        }

        private void timer1_Tick(object sender, EventArgs e)
        {
            value += 5;

            if (progressBar1.Value < 100)
                progressBar1.Value = value;

            total += random.Next(1, 1001);

            label2.Text = total + " Scanned Done";

            Debug.WriteLine(value + " - " + total);

            if (value >= 100)
            {
                timer1.Enabled = false;

                result = MessageBox.Show("0 match found", "Result", MessageBoxButtons.OK, MessageBoxIcon.Information);

                if (result == DialogResult.OK)
                    this.Close();
            }
        }
    }
}
