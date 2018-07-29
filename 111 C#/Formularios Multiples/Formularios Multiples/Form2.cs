using System.Windows.Forms;

namespace WindowsFormsApp1
{
    public partial class Form2 : Form
    {
        Main f1;

        public Form2(Main f1)
        {
            InitializeComponent();

            this.f1 = f1;
        }

        private void Form3_FormClosing(object sender, FormClosingEventArgs e)
        {

           f1.Show();
        }
    }
}
