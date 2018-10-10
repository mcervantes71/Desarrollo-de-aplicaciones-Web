using System;
using System.Diagnostics;
using System.Windows.Forms;

namespace Conversion_C_F
{
    public partial class Form1 : Form
    {
        void Vista()
        {
            lb_celsuis.Text = trk_celsius.Value.ToString() + " ºC";
            lb_fahrenheit.Text = trk_fahrenheit.Value.ToString() + " ºF";
            lb_kelvin.Text = trk_kelvin.Value.ToString() + " ºK";
        }

        private void trk_celsius_Scroll(object sender, EventArgs e)
        {
            trk_fahrenheit.Value = (int)(trk_celsius.Value * 1.8 + 32);
            trk_kelvin.Value = trk_celsius.Value + 273;

            Vista();
        }

        private void trk_fahrenheit_Scroll(object sender, EventArgs e)
        {
            trk_celsius.Value = (int)((trk_fahrenheit.Value - 32) / 1.8);
            trk_kelvin.Value = trk_celsius.Value + 273;
            Vista();
        }

        private void trk_kelvin_Scroll(object sender, EventArgs e)
        {
            trk_celsius.Value = trk_kelvin.Value - 273;
            trk_fahrenheit.Value = (int)(trk_celsius.Value * 1.8 + 32);
            Vista();
        }

        public Form1()
        {
            InitializeComponent();
        }

        
    }
}
