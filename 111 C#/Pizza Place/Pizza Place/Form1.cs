using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Pizza_Place
{
    public partial class Form1 : Form
    {
        public int total = 1;
        public int counter = 0;
        public int precio = 0;

        public Form1()
        {
            InitializeComponent();
        }

        public void Limit()
        {
            if (total == counter)
            {
                if(!peperoni.Checked)
                    peperoni.Enabled = false;

                if (!jamon.Checked)
                    jamon.Enabled = false;

                if (!tocino.Checked)
                    tocino.Enabled = false;

                if (!salami.Checked)
                    salami.Enabled = false;

                if (!extra_queso.Checked)
                    extra_queso.Enabled = false;

                if (!piña.Checked)
                    piña.Enabled = false;

                if (!champiñones.Checked)
                    champiñones.Enabled = false;

                if (!molida.Checked)
                    molida.Enabled = false;
            }
        }

        public void Enable()
        {
            peperoni.Enabled = true;
            jamon.Enabled = true;
            tocino.Enabled = true;
            salami.Enabled = true;
            extra_queso.Enabled = true;
            piña.Enabled = true;
            champiñones.Enabled = true;
            molida.Enabled = true;
        }

        public void Clear()
        {
            peperoni.Checked = false;
            jamon.Checked = false;
            tocino.Checked = false;
            salami.Checked = false;
            extra_queso.Checked = false;
            piña.Checked = false;
            champiñones.Checked = false;
            molida.Checked = false;
        }

        private void Button_Click(object sender, EventArgs e)
        {
            if (Chica.Checked)
                precio = 100;
            else if (Mediana.Checked)
                precio = 150;
            else if (Grande.Checked)
                precio = 180;

            if (peperoni.Checked)
                precio += 15;

            if (jamon.Checked)
                precio += 10;

            if (tocino.Checked)
                precio += 25;

            if (salami.Checked)
                precio += 13;

            if (extra_queso.Checked)
                precio += 8;

            if (piña.Checked)
                precio += 20;

            if (champiñones.Checked)
                precio += 16;

            if (molida.Checked)
                precio += 25;

            MessageBox.Show("El precio por su pizza es: " + precio.ToString(), "Total a Pagar", MessageBoxButtons.OK, MessageBoxIcon.Information);
        }
        
        private void CheckChanged(object sender, EventArgs e)
        {
            CheckBox myCheckBox = (CheckBox)sender;

            if(myCheckBox.Checked)
                counter++;
            else
            { 
                counter--;
                Enable();
            }

            Limit();
        }

        private void uno_CheckedChanged(object sender, EventArgs e)
        {
            Clear();

            total = 1;
        }

        private void dos_CheckedChanged(object sender, EventArgs e)
        {
            if (total > 2)
                Clear();
            else
                Enable();

            total = 2;
        }

        private void tres_CheckedChanged(object sender, EventArgs e)
        {
            if (total > 3)
                Clear();
            else
                Enable();

            total = 3;
        }

        private void cuatro_CheckedChanged(object sender, EventArgs e)
        {
            Enable();

            total = 4;
        }
    }
}
