using System;
using System.Collections;
using System.Windows.Forms;

namespace Sopa_Letras
{
    public partial class Form1 : Form
    {
        string[] palabras = { "ALMA", "BRAZO", "DIA", "DUDA", "MESA", "MIRADA", "MUERTE", "PAIS", "PERSONA", "SILENCIO"};
        char[] palabra;

        ArrayList letras = new ArrayList();

        public Form1()
        {
            InitializeComponent();
        }

        public void Check()
        {
            if (buttons[4, 2].BackColor == System.Drawing.SystemColors.ActiveCaption &&
                buttons[4, 3].BackColor == System.Drawing.SystemColors.ActiveCaption &&
                buttons[4, 4].BackColor == System.Drawing.SystemColors.ActiveCaption &&
                buttons[4, 5].BackColor == System.Drawing.SystemColors.ActiveCaption)
            {
                labels[0].Font = new System.Drawing.Font("Microsoft YaHei", 12F, ((System.Drawing.FontStyle)((System.Drawing.FontStyle.Italic | System.Drawing.FontStyle.Strikeout))), System.Drawing.GraphicsUnit.Point, ((byte)(0)));
                buttons[4, 2].Enabled = false;
                buttons[4, 3].Enabled = false;
                buttons[4, 4].Enabled = false;
                buttons[4, 5].Enabled = false;
            }
            else if (buttons[8, 5].BackColor == System.Drawing.SystemColors.ActiveCaption &&
                buttons[8, 6].BackColor == System.Drawing.SystemColors.ActiveCaption &&
                buttons[8, 7].BackColor == System.Drawing.SystemColors.ActiveCaption &&
                buttons[8, 8].BackColor == System.Drawing.SystemColors.ActiveCaption &&
                buttons[8, 9].BackColor == System.Drawing.SystemColors.ActiveCaption)
            {
                labels[1].Font = new System.Drawing.Font("Microsoft YaHei", 12F, ((System.Drawing.FontStyle)((System.Drawing.FontStyle.Italic | System.Drawing.FontStyle.Strikeout))), System.Drawing.GraphicsUnit.Point, ((byte)(0)));
                buttons[8, 5].Enabled = false;
                buttons[8, 6].Enabled = false;
                buttons[8, 7].Enabled = false;
                buttons[8, 8].Enabled = false;
                buttons[8, 9].Enabled = false;
            }
            else if (buttons[8, 0].BackColor == System.Drawing.SystemColors.ActiveCaption &&
                buttons[8, 1].BackColor == System.Drawing.SystemColors.ActiveCaption &&
                buttons[8, 2].BackColor == System.Drawing.SystemColors.ActiveCaption)
            {
                labels[2].Font = new System.Drawing.Font("Microsoft YaHei", 12F, ((System.Drawing.FontStyle)((System.Drawing.FontStyle.Italic | System.Drawing.FontStyle.Strikeout))), System.Drawing.GraphicsUnit.Point, ((byte)(0)));
                buttons[8, 0].Enabled = false;
                buttons[8, 1].Enabled = false;
                buttons[8, 2].Enabled = false;
            }
            else if (buttons[1, 2].BackColor == System.Drawing.SystemColors.ActiveCaption &&
                buttons[2, 2].BackColor == System.Drawing.SystemColors.ActiveCaption &&
                buttons[3, 2].BackColor == System.Drawing.SystemColors.ActiveCaption &&
                buttons[4, 2].BackColor == System.Drawing.SystemColors.ActiveCaption)
            {
                labels[3].Font = new System.Drawing.Font("Microsoft YaHei", 12F, ((System.Drawing.FontStyle)((System.Drawing.FontStyle.Italic | System.Drawing.FontStyle.Strikeout))), System.Drawing.GraphicsUnit.Point, ((byte)(0)));
                buttons[1, 2].Enabled = false;
                buttons[2, 2].Enabled = false;
                buttons[3, 2].Enabled = false;
                buttons[4, 2].Enabled = false;
            }
            else if (buttons[4, 4].BackColor == System.Drawing.SystemColors.ActiveCaption &&
                buttons[5, 4].BackColor == System.Drawing.SystemColors.ActiveCaption &&
                buttons[6, 4].BackColor == System.Drawing.SystemColors.ActiveCaption &&
                buttons[7, 4].BackColor == System.Drawing.SystemColors.ActiveCaption)
            {
                labels[4].Font = new System.Drawing.Font("Microsoft YaHei", 12F, ((System.Drawing.FontStyle)((System.Drawing.FontStyle.Italic | System.Drawing.FontStyle.Strikeout))), System.Drawing.GraphicsUnit.Point, ((byte)(0)));
                buttons[4, 4].Enabled = false;
                buttons[5, 4].Enabled = false;
                buttons[6, 4].Enabled = false;
                buttons[7, 4].Enabled = false;
            }
            else if (buttons[3, 7].BackColor == System.Drawing.SystemColors.ActiveCaption &&
                buttons[4, 7].BackColor == System.Drawing.SystemColors.ActiveCaption &&
                buttons[5, 7].BackColor == System.Drawing.SystemColors.ActiveCaption &&
                buttons[6, 7].BackColor == System.Drawing.SystemColors.ActiveCaption &&
                buttons[7, 7].BackColor == System.Drawing.SystemColors.ActiveCaption &&
                buttons[8, 7].BackColor == System.Drawing.SystemColors.ActiveCaption)
            {
                labels[5].Font = new System.Drawing.Font("Microsoft YaHei", 12F, ((System.Drawing.FontStyle)((System.Drawing.FontStyle.Italic | System.Drawing.FontStyle.Strikeout))), System.Drawing.GraphicsUnit.Point, ((byte)(0)));
                buttons[3, 7].Enabled = false;
                buttons[4, 7].Enabled = false;
                buttons[5, 7].Enabled = false;
                buttons[6, 7].Enabled = false;
                buttons[7, 7].Enabled = false;
                buttons[8, 7].Enabled = false;
            }
            else if (buttons[2, 1].BackColor == System.Drawing.SystemColors.ActiveCaption &&
                buttons[2, 2].BackColor == System.Drawing.SystemColors.ActiveCaption &&
                buttons[2, 3].BackColor == System.Drawing.SystemColors.ActiveCaption &&
                buttons[2, 4].BackColor == System.Drawing.SystemColors.ActiveCaption &&
                buttons[2, 5].BackColor == System.Drawing.SystemColors.ActiveCaption &&
                buttons[2, 6].BackColor == System.Drawing.SystemColors.ActiveCaption)
            {
                labels[6].Font = new System.Drawing.Font("Microsoft YaHei", 12F, ((System.Drawing.FontStyle)((System.Drawing.FontStyle.Italic | System.Drawing.FontStyle.Strikeout))), System.Drawing.GraphicsUnit.Point, ((byte)(0)));
                buttons[2, 1].Enabled = false;
                buttons[2, 2].Enabled = false;
                buttons[2, 3].Enabled = false;
                buttons[2, 4].Enabled = false;
                buttons[2, 5].Enabled = false;
                buttons[2, 6].Enabled = false;
            }
            else if (buttons[6, 1].BackColor == System.Drawing.SystemColors.ActiveCaption &&
                buttons[7, 1].BackColor == System.Drawing.SystemColors.ActiveCaption &&
                buttons[8, 1].BackColor == System.Drawing.SystemColors.ActiveCaption &&
                buttons[9, 1].BackColor == System.Drawing.SystemColors.ActiveCaption)
            {
                labels[7].Font = new System.Drawing.Font("Microsoft YaHei", 12F, ((System.Drawing.FontStyle)((System.Drawing.FontStyle.Italic | System.Drawing.FontStyle.Strikeout))), System.Drawing.GraphicsUnit.Point, ((byte)(0)));
                buttons[6, 1].Enabled = false;
                buttons[7, 1].Enabled = false;
                buttons[8, 1].Enabled = false;
                buttons[9, 1].Enabled = false;
            }
            else if (buttons[6, 1].BackColor == System.Drawing.SystemColors.ActiveCaption &&
                buttons[6, 2].BackColor == System.Drawing.SystemColors.ActiveCaption &&
                buttons[6, 3].BackColor == System.Drawing.SystemColors.ActiveCaption &&
                buttons[6, 4].BackColor == System.Drawing.SystemColors.ActiveCaption &&
                buttons[6, 5].BackColor == System.Drawing.SystemColors.ActiveCaption &&
                buttons[6, 6].BackColor == System.Drawing.SystemColors.ActiveCaption &&
                buttons[6, 7].BackColor == System.Drawing.SystemColors.ActiveCaption)
            {
                labels[8].Font = new System.Drawing.Font("Microsoft YaHei", 12F, ((System.Drawing.FontStyle)((System.Drawing.FontStyle.Italic | System.Drawing.FontStyle.Strikeout))), System.Drawing.GraphicsUnit.Point, ((byte)(0)));
                buttons[6, 1].Enabled = false;
                buttons[6, 2].Enabled = false;
                buttons[6, 3].Enabled = false;
                buttons[6, 4].Enabled = false;
                buttons[6, 5].Enabled = false;
                buttons[6, 6].Enabled = false;
                buttons[6, 7].Enabled = false;
            }
            else if (buttons[1, 9].BackColor == System.Drawing.SystemColors.ActiveCaption &&
                buttons[2, 9].BackColor == System.Drawing.SystemColors.ActiveCaption &&
                buttons[3, 9].BackColor == System.Drawing.SystemColors.ActiveCaption &&
                buttons[4, 9].BackColor == System.Drawing.SystemColors.ActiveCaption &&
                buttons[5, 9].BackColor == System.Drawing.SystemColors.ActiveCaption &&
                buttons[6, 9].BackColor == System.Drawing.SystemColors.ActiveCaption &&
                buttons[7, 9].BackColor == System.Drawing.SystemColors.ActiveCaption &&
                buttons[8, 9].BackColor == System.Drawing.SystemColors.ActiveCaption)
            {
                labels[9].Font = new System.Drawing.Font("Microsoft YaHei", 12F, ((System.Drawing.FontStyle)((System.Drawing.FontStyle.Italic | System.Drawing.FontStyle.Strikeout))), System.Drawing.GraphicsUnit.Point, ((byte)(0)));
                buttons[1, 9].Enabled = false;
                buttons[2, 9].Enabled = false;
                buttons[3, 9].Enabled = false;
                buttons[4, 9].Enabled = false;
                buttons[5, 9].Enabled = false;
                buttons[6, 9].Enabled = false;
                buttons[7, 9].Enabled = false;
                buttons[8, 9].Enabled = false;
            }

        }

        private void Button_Click(object sender, EventArgs e)
        {
            Button myButton = (Button)sender;

            if (myButton.BackColor == System.Drawing.SystemColors.Control)
            {
                myButton.BackColor = System.Drawing.SystemColors.ActiveCaption;
                myButton.Font = new System.Drawing.Font("Consolas", 12F, ((System.Drawing.FontStyle)((System.Drawing.FontStyle.Bold | System.Drawing.FontStyle.Italic))), System.Drawing.GraphicsUnit.Point, ((byte)(0)));
                myButton.ForeColor = System.Drawing.SystemColors.ButtonHighlight;

                letras.Add(myButton.Text);
            }
            else
            {
                myButton.BackColor = System.Drawing.SystemColors.Control;
                myButton.Font = new System.Drawing.Font("Consolas", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
                myButton.ForeColor = System.Drawing.SystemColors.ControlText;

                letras.Remove(myButton.Text);
            }

            Check();
        }

        private void Reset_Click(object sender, EventArgs e)
        {
            foreach(Control ctrl in Controls)
            {
                if(ctrl is Button && ctrl.Text != "Reset")
                {
                    ctrl.BackColor = System.Drawing.SystemColors.Control;
                    ctrl.Font = new System.Drawing.Font("Consolas", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
                    ctrl.ForeColor = System.Drawing.SystemColors.ControlText;
                    ctrl.Enabled = true;
                }
                else if(ctrl is Label)
                {
                    ctrl.Font = new System.Drawing.Font("Microsoft YaHei", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
                }
            }

            letras.Clear();
        }
    }
}
