using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Diagnostics;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace CreditCard_Checker
{
    public partial class Form2 : Form
    {
        int value = 0;

        public Form2()
        {
            InitializeComponent();
        }

        private void Form2_Shown(object sender, EventArgs e)
        {
            do
            {
                value += 5;

                if (progressBar1.Value < 100)
                    progressBar1.Value = value;

                Debug.WriteLine(value);

                Thread.Sleep(1000);
            } while (value <= 100);
        }
    }
}
