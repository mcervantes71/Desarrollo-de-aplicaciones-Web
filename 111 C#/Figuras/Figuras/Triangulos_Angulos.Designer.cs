namespace Figuras
{
    partial class Form1
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

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

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(Form1));
            this.lb_ang1 = new System.Windows.Forms.Label();
            this.lb_ang2 = new System.Windows.Forms.Label();
            this.lb_ang3 = new System.Windows.Forms.Label();
            this.txt_ang1 = new System.Windows.Forms.TextBox();
            this.txt_ang2 = new System.Windows.Forms.TextBox();
            this.txt_ang3 = new System.Windows.Forms.TextBox();
            this.btn_Tipo = new System.Windows.Forms.Button();
            this.SuspendLayout();
            // 
            // lb_ang1
            // 
            this.lb_ang1.AutoSize = true;
            this.lb_ang1.Location = new System.Drawing.Point(54, 47);
            this.lb_ang1.Name = "lb_ang1";
            this.lb_ang1.Size = new System.Drawing.Size(72, 20);
            this.lb_ang1.TabIndex = 0;
            this.lb_ang1.Text = "Angulo 1";
            // 
            // lb_ang2
            // 
            this.lb_ang2.AutoSize = true;
            this.lb_ang2.Location = new System.Drawing.Point(54, 96);
            this.lb_ang2.Name = "lb_ang2";
            this.lb_ang2.Size = new System.Drawing.Size(72, 20);
            this.lb_ang2.TabIndex = 1;
            this.lb_ang2.Text = "Angulo 2";
            // 
            // lb_ang3
            // 
            this.lb_ang3.AutoSize = true;
            this.lb_ang3.Location = new System.Drawing.Point(54, 145);
            this.lb_ang3.Name = "lb_ang3";
            this.lb_ang3.Size = new System.Drawing.Size(72, 20);
            this.lb_ang3.TabIndex = 2;
            this.lb_ang3.Text = "Angulo 3";
            // 
            // txt_ang1
            // 
            this.txt_ang1.Location = new System.Drawing.Point(139, 47);
            this.txt_ang1.Name = "txt_ang1";
            this.txt_ang1.Size = new System.Drawing.Size(99, 26);
            this.txt_ang1.TabIndex = 3;
            // 
            // txt_ang2
            // 
            this.txt_ang2.Location = new System.Drawing.Point(139, 96);
            this.txt_ang2.Name = "txt_ang2";
            this.txt_ang2.Size = new System.Drawing.Size(99, 26);
            this.txt_ang2.TabIndex = 4;
            // 
            // txt_ang3
            // 
            this.txt_ang3.Location = new System.Drawing.Point(139, 145);
            this.txt_ang3.Name = "txt_ang3";
            this.txt_ang3.Size = new System.Drawing.Size(99, 26);
            this.txt_ang3.TabIndex = 5;
            // 
            // btn_Tipo
            // 
            this.btn_Tipo.Location = new System.Drawing.Point(78, 222);
            this.btn_Tipo.Name = "btn_Tipo";
            this.btn_Tipo.Size = new System.Drawing.Size(122, 86);
            this.btn_Tipo.TabIndex = 6;
            this.btn_Tipo.Text = "Tipo de Triángulo";
            this.btn_Tipo.UseVisualStyleBackColor = true;
            this.btn_Tipo.Click += new System.EventHandler(this.btn_Tipo_Click);
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(9F, 20F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(286, 356);
            this.Controls.Add(this.btn_Tipo);
            this.Controls.Add(this.txt_ang3);
            this.Controls.Add(this.txt_ang2);
            this.Controls.Add(this.txt_ang1);
            this.Controls.Add(this.lb_ang3);
            this.Controls.Add(this.lb_ang2);
            this.Controls.Add(this.lb_ang1);
            this.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.Icon = ((System.Drawing.Icon)(resources.GetObject("$this.Icon")));
            this.Margin = new System.Windows.Forms.Padding(4, 5, 4, 5);
            this.Name = "Form1";
            this.Text = "Tipo de Triángulo";
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label lb_ang1;
        private System.Windows.Forms.Label lb_ang2;
        private System.Windows.Forms.Label lb_ang3;
        private System.Windows.Forms.TextBox txt_ang1;
        private System.Windows.Forms.TextBox txt_ang2;
        private System.Windows.Forms.TextBox txt_ang3;
        private System.Windows.Forms.Button btn_Tipo;
    }
}

