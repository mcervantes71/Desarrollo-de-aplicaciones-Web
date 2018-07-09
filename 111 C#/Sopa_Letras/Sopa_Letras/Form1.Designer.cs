namespace Sopa_Letras
{
    partial class Form1
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Controls Declaration
        /// </summary>
        private System.Windows.Forms.Button[,] buttons;

        private System.Windows.Forms.Label[] labels;

        private System.Windows.Forms.Button btn_reset;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }
        
        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.buttons = new System.Windows.Forms.Button[10, 10];

            for(int i = 0; i < 10; i++)
                for(int j = 0; j < 10; j++)
                {
                    this.buttons[i, j] = new System.Windows.Forms.Button();
                }


            this.labels = new System.Windows.Forms.Label[10];

            for(int i = 0; i < 10; i++)
                this.labels[i] = new System.Windows.Forms.Label();


            this.btn_reset = new System.Windows.Forms.Button();
            this.SuspendLayout();


            // 
            // buttons
            // 
            for (int i = 0; i < 10; i++)
                for (int j = 0; j < 10; j++)
                {
                    this.buttons[i, j].BackColor = System.Drawing.SystemColors.Control;
                    this.buttons[i, j].Font = new System.Drawing.Font("Consolas", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
                    this.buttons[i, j].ForeColor = System.Drawing.SystemColors.ControlText;
                    this.buttons[i, j].Location = new System.Drawing.Point(30 + (j * 50), 20 + (i * 50));
                    this.buttons[i, j].Name = "button" + i + j;
                    this.buttons[i, j].Size = new System.Drawing.Size(50, 50);
                    this.buttons[i, j].Text = "x";
                    this.buttons[i, j].UseVisualStyleBackColor = false;
                    this.buttons[i, j].Click += new System.EventHandler(this.Button_Click);
                }
            // 
            // buttons Text
            // 
            this.buttons[0, 0].Text = "I";
            this.buttons[0, 1].Text = "O";
            this.buttons[0, 2].Text = "M";
            this.buttons[0, 3].Text = "F";
            this.buttons[0, 4].Text = "U";
            this.buttons[0, 5].Text = "L";
            this.buttons[0, 6].Text = "O";
            this.buttons[0, 7].Text = "I";
            this.buttons[0, 8].Text = "G";
            this.buttons[0, 9].Text = "O";
            this.buttons[1, 0].Text = "L";
            this.buttons[1, 1].Text = "Q";
            this.buttons[1, 2].Text = "D";
            this.buttons[1, 3].Text = "E";
            this.buttons[1, 4].Text = "N";
            this.buttons[1, 5].Text = "U";
            this.buttons[1, 6].Text = "J";
            this.buttons[1, 7].Text = "T";
            this.buttons[1, 8].Text = "L";
            this.buttons[1, 9].Text = "S";
            this.buttons[2, 0].Text = "S";
            this.buttons[2, 1].Text = "M";
            this.buttons[2, 2].Text = "U";
            this.buttons[2, 3].Text = "E";
            this.buttons[2, 4].Text = "R";
            this.buttons[2, 5].Text = "T";
            this.buttons[2, 6].Text = "E";
            this.buttons[2, 7].Text = "K";
            this.buttons[2, 8].Text = "W";
            this.buttons[2, 9].Text = "I";
            this.buttons[3, 0].Text = "V";
            this.buttons[3, 1].Text = "N";
            this.buttons[3, 2].Text = "D";
            this.buttons[3, 3].Text = "D";
            this.buttons[3, 4].Text = "U";
            this.buttons[3, 5].Text = "N";
            this.buttons[3, 6].Text = "O";
            this.buttons[3, 7].Text = "M";
            this.buttons[3, 8].Text = "I";
            this.buttons[3, 9].Text = "L";
            this.buttons[4, 0].Text = "U";
            this.buttons[4, 1].Text = "U";
            this.buttons[4, 2].Text = "A";
            this.buttons[4, 3].Text = "L";
            this.buttons[4, 4].Text = "M";
            this.buttons[4, 5].Text = "A";
            this.buttons[4, 6].Text = "F";
            this.buttons[4, 7].Text = "I";
            this.buttons[4, 8].Text = "M";
            this.buttons[4, 9].Text = "E";
            this.buttons[5, 0].Text = "A";
            this.buttons[5, 1].Text = "T";
            this.buttons[5, 2].Text = "T";
            this.buttons[5, 3].Text = "I";
            this.buttons[5, 4].Text = "E";
            this.buttons[5, 5].Text = "N";
            this.buttons[5, 6].Text = "Y";
            this.buttons[5, 7].Text = "R";
            this.buttons[5, 8].Text = "M";
            this.buttons[5, 9].Text = "N";
            this.buttons[6, 0].Text = "A";
            this.buttons[6, 1].Text = "P";
            this.buttons[6, 2].Text = "E";
            this.buttons[6, 3].Text = "R";
            this.buttons[6, 4].Text = "S";
            this.buttons[6, 5].Text = "O";
            this.buttons[6, 6].Text = "N";
            this.buttons[6, 7].Text = "A";
            this.buttons[6, 8].Text = "E";
            this.buttons[6, 9].Text = "C";
            this.buttons[7, 0].Text = "C";
            this.buttons[7, 1].Text = "A";
            this.buttons[7, 2].Text = "O";
            this.buttons[7, 3].Text = "O";
            this.buttons[7, 4].Text = "A";
            this.buttons[7, 5].Text = "O";
            this.buttons[7, 6].Text = "B";
            this.buttons[7, 7].Text = "D";
            this.buttons[7, 8].Text = "R";
            this.buttons[7, 9].Text = "I";
            this.buttons[8, 0].Text = "D";
            this.buttons[8, 1].Text = "I";
            this.buttons[8, 2].Text = "A";
            this.buttons[8, 3].Text = "Y";
            this.buttons[8, 4].Text = "H";
            this.buttons[8, 5].Text = "B";
            this.buttons[8, 6].Text = "R";
            this.buttons[8, 7].Text = "A";
            this.buttons[8, 8].Text = "Z";
            this.buttons[8, 9].Text = "O";
            this.buttons[9, 0].Text = "B";
            this.buttons[9, 1].Text = "S";
            this.buttons[9, 2].Text = "Q";
            this.buttons[9, 3].Text = "C";
            this.buttons[9, 4].Text = "E";
            this.buttons[9, 5].Text = "N";
            this.buttons[9, 6].Text = "O";
            this.buttons[9, 7].Text = "I";
            this.buttons[9, 8].Text = "A";
            this.buttons[9, 9].Text = "K";

            // 
            // labels
            // 
            for (int i = 0; i < 10; i++)
            {
                this.labels[i].AutoSize = true;
                this.labels[i].Font = new System.Drawing.Font("Microsoft YaHei", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
                this.labels[i].Location = new System.Drawing.Point(565, 40 + (30 * i));
                this.labels[i].Name = "label" + i;
                this.labels[i].Size = new System.Drawing.Size(49, 21);
                this.labels[i].TabIndex = 100;
                this.labels[i].Text = palabras[i];
            }
            
            // 
            // btn_reset
            // 
            this.btn_reset.Location = new System.Drawing.Point(671, 514);
            this.btn_reset.Name = "btn_reset";
            this.btn_reset.Size = new System.Drawing.Size(75, 23);
            this.btn_reset.TabIndex = 110;
            this.btn_reset.Text = "Reset";
            this.btn_reset.UseVisualStyleBackColor = true;
            this.btn_reset.Click += new System.EventHandler(this.Reset_Click);

            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(749, 539);

            this.Controls.Add(this.btn_reset);

            for(int i = 0; i < 10; i++)
                this.Controls.Add(this.labels[i]);

            
            for(int i = 0; i < 10; i++)
                for(int j = 0; j < 10; j++)
                {
                    this.Controls.Add(this.buttons[i, j]);
                }
            
            this.Name = "Form1";
            this.Text = "Sopa de Letras";
            this.ResumeLayout(false);
            this.PerformLayout();

        }
    }
}