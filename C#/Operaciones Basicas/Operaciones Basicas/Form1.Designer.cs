namespace Operaciones_Basicas
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
            this.lb_numero1 = new System.Windows.Forms.Label();
            this.txt_numero1 = new System.Windows.Forms.TextBox();
            this.btn_Suma = new System.Windows.Forms.Button();
            this.txt_numero2 = new System.Windows.Forms.TextBox();
            this.lb_numero2 = new System.Windows.Forms.Label();
            this.btn_Resta = new System.Windows.Forms.Button();
            this.btn_Mult = new System.Windows.Forms.Button();
            this.btn_Div = new System.Windows.Forms.Button();
            this.SuspendLayout();
            // 
            // lb_numero1
            // 
            this.lb_numero1.AutoSize = true;
            this.lb_numero1.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lb_numero1.Location = new System.Drawing.Point(113, 41);
            this.lb_numero1.Margin = new System.Windows.Forms.Padding(4, 0, 4, 0);
            this.lb_numero1.Name = "lb_numero1";
            this.lb_numero1.Size = new System.Drawing.Size(78, 20);
            this.lb_numero1.TabIndex = 0;
            this.lb_numero1.Text = "Numero 1";
            // 
            // txt_numero1
            // 
            this.txt_numero1.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txt_numero1.Location = new System.Drawing.Point(218, 35);
            this.txt_numero1.Margin = new System.Windows.Forms.Padding(4, 5, 4, 5);
            this.txt_numero1.Name = "txt_numero1";
            this.txt_numero1.Size = new System.Drawing.Size(149, 26);
            this.txt_numero1.TabIndex = 1;
            // 
            // btn_Suma
            // 
            this.btn_Suma.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btn_Suma.Location = new System.Drawing.Point(56, 195);
            this.btn_Suma.Margin = new System.Windows.Forms.Padding(4, 5, 4, 5);
            this.btn_Suma.Name = "btn_Suma";
            this.btn_Suma.Size = new System.Drawing.Size(188, 48);
            this.btn_Suma.TabIndex = 3;
            this.btn_Suma.Text = "Suma";
            this.btn_Suma.UseVisualStyleBackColor = true;
            this.btn_Suma.Click += new System.EventHandler(this.btn_Suma_Click);
            // 
            // txt_numero2
            // 
            this.txt_numero2.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txt_numero2.Location = new System.Drawing.Point(218, 103);
            this.txt_numero2.Margin = new System.Windows.Forms.Padding(4, 5, 4, 5);
            this.txt_numero2.Name = "txt_numero2";
            this.txt_numero2.Size = new System.Drawing.Size(149, 26);
            this.txt_numero2.TabIndex = 2;
            // 
            // lb_numero2
            // 
            this.lb_numero2.AutoSize = true;
            this.lb_numero2.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lb_numero2.Location = new System.Drawing.Point(113, 109);
            this.lb_numero2.Margin = new System.Windows.Forms.Padding(4, 0, 4, 0);
            this.lb_numero2.Name = "lb_numero2";
            this.lb_numero2.Size = new System.Drawing.Size(78, 20);
            this.lb_numero2.TabIndex = 0;
            this.lb_numero2.Text = "Numero 2";
            // 
            // btn_Resta
            // 
            this.btn_Resta.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btn_Resta.Location = new System.Drawing.Point(282, 195);
            this.btn_Resta.Margin = new System.Windows.Forms.Padding(4, 5, 4, 5);
            this.btn_Resta.Name = "btn_Resta";
            this.btn_Resta.Size = new System.Drawing.Size(188, 48);
            this.btn_Resta.TabIndex = 4;
            this.btn_Resta.Text = "Resta";
            this.btn_Resta.UseVisualStyleBackColor = true;
            this.btn_Resta.Click += new System.EventHandler(this.btn_Resta_Click);
            // 
            // btn_Mult
            // 
            this.btn_Mult.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btn_Mult.Location = new System.Drawing.Point(45, 260);
            this.btn_Mult.Margin = new System.Windows.Forms.Padding(4, 5, 4, 5);
            this.btn_Mult.Name = "btn_Mult";
            this.btn_Mult.Size = new System.Drawing.Size(207, 48);
            this.btn_Mult.TabIndex = 5;
            this.btn_Mult.Text = "Multiplicación";
            this.btn_Mult.UseVisualStyleBackColor = true;
            this.btn_Mult.Click += new System.EventHandler(this.btn_Mult_Click);
            // 
            // btn_Div
            // 
            this.btn_Div.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btn_Div.Location = new System.Drawing.Point(282, 260);
            this.btn_Div.Margin = new System.Windows.Forms.Padding(4, 5, 4, 5);
            this.btn_Div.Name = "btn_Div";
            this.btn_Div.Size = new System.Drawing.Size(188, 48);
            this.btn_Div.TabIndex = 6;
            this.btn_Div.Text = "División";
            this.btn_Div.UseVisualStyleBackColor = true;
            this.btn_Div.Click += new System.EventHandler(this.btn_Div_Click);
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(9F, 20F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(526, 358);
            this.Controls.Add(this.btn_Div);
            this.Controls.Add(this.btn_Mult);
            this.Controls.Add(this.btn_Resta);
            this.Controls.Add(this.txt_numero2);
            this.Controls.Add(this.lb_numero2);
            this.Controls.Add(this.btn_Suma);
            this.Controls.Add(this.txt_numero1);
            this.Controls.Add(this.lb_numero1);
            this.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.Margin = new System.Windows.Forms.Padding(4, 5, 4, 5);
            this.Name = "Form1";
            this.Text = "Operaciones Básicas";
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label lb_numero1;
        private System.Windows.Forms.TextBox txt_numero1;
        private System.Windows.Forms.Button btn_Suma;
        private System.Windows.Forms.TextBox txt_numero2;
        private System.Windows.Forms.Label lb_numero2;
        private System.Windows.Forms.Button btn_Resta;
        private System.Windows.Forms.Button btn_Mult;
        private System.Windows.Forms.Button btn_Div;
    }
}

