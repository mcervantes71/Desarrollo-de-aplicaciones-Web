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
            this.lb_lado1 = new System.Windows.Forms.Label();
            this.lb_lado2 = new System.Windows.Forms.Label();
            this.lb_lado3 = new System.Windows.Forms.Label();
            this.txt_lado1 = new System.Windows.Forms.TextBox();
            this.txt_lado2 = new System.Windows.Forms.TextBox();
            this.txt_lado3 = new System.Windows.Forms.TextBox();
            this.btn_Tipo = new System.Windows.Forms.Button();
            this.SuspendLayout();
            // 
            // lb_lado1
            // 
            this.lb_lado1.AutoSize = true;
            this.lb_lado1.Location = new System.Drawing.Point(54, 47);
            this.lb_lado1.Name = "lb_lado1";
            this.lb_lado1.Size = new System.Drawing.Size(58, 20);
            this.lb_lado1.TabIndex = 0;
            this.lb_lado1.Text = "Lado 1";
            // 
            // lb_lado2
            // 
            this.lb_lado2.AutoSize = true;
            this.lb_lado2.Location = new System.Drawing.Point(54, 96);
            this.lb_lado2.Name = "lb_lado2";
            this.lb_lado2.Size = new System.Drawing.Size(58, 20);
            this.lb_lado2.TabIndex = 1;
            this.lb_lado2.Text = "Lado 2";
            // 
            // lb_lado3
            // 
            this.lb_lado3.AutoSize = true;
            this.lb_lado3.Location = new System.Drawing.Point(54, 145);
            this.lb_lado3.Name = "lb_lado3";
            this.lb_lado3.Size = new System.Drawing.Size(58, 20);
            this.lb_lado3.TabIndex = 2;
            this.lb_lado3.Text = "Lado 3";
            // 
            // txt_lado1
            // 
            this.txt_lado1.Location = new System.Drawing.Point(139, 47);
            this.txt_lado1.Name = "txt_lado1";
            this.txt_lado1.Size = new System.Drawing.Size(99, 26);
            this.txt_lado1.TabIndex = 3;
            // 
            // txt_lado2
            // 
            this.txt_lado2.Location = new System.Drawing.Point(139, 96);
            this.txt_lado2.Name = "txt_lado2";
            this.txt_lado2.Size = new System.Drawing.Size(99, 26);
            this.txt_lado2.TabIndex = 4;
            // 
            // txt_lado3
            // 
            this.txt_lado3.Location = new System.Drawing.Point(139, 145);
            this.txt_lado3.Name = "txt_lado3";
            this.txt_lado3.Size = new System.Drawing.Size(99, 26);
            this.txt_lado3.TabIndex = 5;
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
            this.Controls.Add(this.txt_lado3);
            this.Controls.Add(this.txt_lado2);
            this.Controls.Add(this.txt_lado1);
            this.Controls.Add(this.lb_lado3);
            this.Controls.Add(this.lb_lado2);
            this.Controls.Add(this.lb_lado1);
            this.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.Margin = new System.Windows.Forms.Padding(4, 5, 4, 5);
            this.Name = "Form1";
            this.Text = "Tipo de Triángulo";
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label lb_lado1;
        private System.Windows.Forms.Label lb_lado2;
        private System.Windows.Forms.Label lb_lado3;
        private System.Windows.Forms.TextBox txt_lado1;
        private System.Windows.Forms.TextBox txt_lado2;
        private System.Windows.Forms.TextBox txt_lado3;
        private System.Windows.Forms.Button btn_Tipo;
    }
}

