using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace combox_Demo
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        public void Clear(Boolean Combo2Changed)
        {
            if (Combo2Changed)
            {
                comboBox2.Text = "";
                comboBox2.Items.Clear();
            }

            comboBox3.Text = "";
            comboBox3.Items.Clear();

            pictureBox1.Visible = false;
        }

        private void comboBox1_SelectedIndexChanged(object sender, EventArgs e)
        {
            Clear(true);

            if (comboBox1.SelectedIndex == 0)
            {
                comboBox2.Items.Add("Atlántico");
                comboBox2.Items.Add("Central");
                comboBox2.Items.Add("Sureste");
            }
            else
            {
                comboBox2.Items.Add("Noroeste");
                comboBox2.Items.Add("Pacífico");
                comboBox2.Items.Add("Suroeste");
            }
        }

        private void comboBox2_SelectedIndexChanged(object sender, EventArgs e)
        {
            Clear(false);

            if (comboBox2.SelectedItem.ToString() == "Noroeste")
            {
                comboBox3.Items.Add("Denver - Nuggets");
                comboBox3.Items.Add("Minnesota - Timberwolves");
                comboBox3.Items.Add("Seattle - SuperSonics");
                comboBox3.Items.Add("Portland - Trail Blazers");
                comboBox3.Items.Add("Utah - Jazz");
            }
            else if(comboBox2.SelectedItem.ToString() == "Pacífico")
            {
                comboBox3.Items.Add("San Francisco - Warriors");
                comboBox3.Items.Add("San Diego - Clippers");
                comboBox3.Items.Add("Los Angeles - Lakers");
                comboBox3.Items.Add("Phoenix - Suns");
                comboBox3.Items.Add("Sacramento - Kings");
            }
            else if(comboBox2.SelectedItem.ToString() == "Suroeste")
            {
                comboBox3.Items.Add("Dallas - Mavericks");
                comboBox3.Items.Add("Houston - Rockets");
                comboBox3.Items.Add("Memphis - Grizzlies");
                comboBox3.Items.Add("New Orleans - Hornets");
                comboBox3.Items.Add("San Antonio - Spurs");
            }
            else if(comboBox2.SelectedItem.ToString() == "Atlántico")
            {
                comboBox3.Items.Add("Boston - Celtics");
                comboBox3.Items.Add("Brooklyn - Nets");
                comboBox3.Items.Add("New York - Knicks");
                comboBox3.Items.Add("Philadelphia - 76ers");
                comboBox3.Items.Add("Toronto Raptors");
            }
            else if(comboBox2.SelectedItem.ToString() == "Central")
            {
                comboBox3.Items.Add("Chicago - Bulls");
                comboBox3.Items.Add("Cleveland - Cavaliers");
                comboBox3.Items.Add("Detroit - Pistons");
                comboBox3.Items.Add("Indiana - Pacers");
                comboBox3.Items.Add("Milwaukee - Bucks");
            }
            else if(comboBox2.SelectedItem.ToString() == "Sureste")
            {
                comboBox3.Items.Add("Atlanta - Hawks");
                comboBox3.Items.Add("Charlotte - Hornets");
                comboBox3.Items.Add("Miami - Heat");
                comboBox3.Items.Add("Orlando - Magics");
                comboBox3.Items.Add("Washington - Wizards");
            }
        }

        private void comboBox3_SelectedIndexChanged(object sender, EventArgs e)
        {
            pictureBox1.Visible = true;

            if (comboBox3.SelectedItem.ToString() == "Denver - Nuggets")
                pictureBox1.Image = combox_Demo.Properties.Resources.Nuggets;
            else if (comboBox3.SelectedItem.ToString() == "San Francisco - Warriors")
                pictureBox1.Image = combox_Demo.Properties.Resources.Wariors;
            else if (comboBox3.SelectedItem.ToString() == "Dallas - Mavericks")
                pictureBox1.Image = combox_Demo.Properties.Resources.Mavericks;
        }
    }
}
