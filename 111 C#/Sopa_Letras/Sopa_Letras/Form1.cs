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
            if(letras.Count > 2)
            {
                labels[0].Font = new System.Drawing.Font("Microsoft YaHei", 12F, ((System.Drawing.FontStyle)((System.Drawing.FontStyle.Italic | System.Drawing.FontStyle.Strikeout))), System.Drawing.GraphicsUnit.Point, ((byte)(0)));
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

        }
    }
}
