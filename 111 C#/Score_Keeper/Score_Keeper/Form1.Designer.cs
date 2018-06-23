namespace Score_Keeper
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
            this.lb_limite = new System.Windows.Forms.Label();
            this.lb_puntos = new System.Windows.Forms.Label();
            this.txt_limite = new System.Windows.Forms.TextBox();
            this.btn_equipo1 = new System.Windows.Forms.Button();
            this.btn_equipo2 = new System.Windows.Forms.Button();
            this.btn_reset = new System.Windows.Forms.Button();
            this.SuspendLayout();
            // 
            // lb_limite
            // 
            this.lb_limite.AutoSize = true;
            this.lb_limite.Font = new System.Drawing.Font("Microsoft YaHei UI", 14.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lb_limite.Location = new System.Drawing.Point(58, 25);
            this.lb_limite.Name = "lb_limite";
            this.lb_limite.Size = new System.Drawing.Size(82, 26);
            this.lb_limite.TabIndex = 0;
            this.lb_limite.Text = "Puntos:";
            // 
            // lb_puntos
            // 
            this.lb_puntos.AutoSize = true;
            this.lb_puntos.Font = new System.Drawing.Font("Microsoft YaHei UI", 48F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lb_puntos.Location = new System.Drawing.Point(79, 71);
            this.lb_puntos.Name = "lb_puntos";
            this.lb_puntos.Size = new System.Drawing.Size(181, 86);
            this.lb_puntos.TabIndex = 1;
            this.lb_puntos.Text = "0 - 0";
            // 
            // txt_limite
            // 
            this.txt_limite.Font = new System.Drawing.Font("Microsoft YaHei UI Light", 14.25F, System.Drawing.FontStyle.Italic, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txt_limite.Location = new System.Drawing.Point(138, 21);
            this.txt_limite.MaxLength = 2;
            this.txt_limite.Name = "txt_limite";
            this.txt_limite.Size = new System.Drawing.Size(40, 32);
            this.txt_limite.TabIndex = 3;
            this.txt_limite.Text = "5";
            this.txt_limite.Enter += new System.EventHandler(this.txt_limite_Enter);
            this.txt_limite.KeyPress += new System.Windows.Forms.KeyPressEventHandler(this.txt_limite_KeyPress);
            // 
            // btn_equipo1
            // 
            this.btn_equipo1.Font = new System.Drawing.Font("Microsoft YaHei UI", 14.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btn_equipo1.Location = new System.Drawing.Point(65, 192);
            this.btn_equipo1.Name = "btn_equipo1";
            this.btn_equipo1.Size = new System.Drawing.Size(81, 41);
            this.btn_equipo1.TabIndex = 0;
            this.btn_equipo1.Text = "+1";
            this.btn_equipo1.UseVisualStyleBackColor = true;
            this.btn_equipo1.Click += new System.EventHandler(this.btn_equipo1_Click);
            // 
            // btn_equipo2
            // 
            this.btn_equipo2.Font = new System.Drawing.Font("Microsoft YaHei UI", 14.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btn_equipo2.Location = new System.Drawing.Point(185, 192);
            this.btn_equipo2.Name = "btn_equipo2";
            this.btn_equipo2.Size = new System.Drawing.Size(81, 41);
            this.btn_equipo2.TabIndex = 1;
            this.btn_equipo2.Text = "+1";
            this.btn_equipo2.UseVisualStyleBackColor = true;
            this.btn_equipo2.Click += new System.EventHandler(this.btn_equipo2_Click);
            // 
            // btn_reset
            // 
            this.btn_reset.Font = new System.Drawing.Font("Microsoft YaHei UI", 14.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btn_reset.Location = new System.Drawing.Point(125, 262);
            this.btn_reset.Name = "btn_reset";
            this.btn_reset.Size = new System.Drawing.Size(81, 41);
            this.btn_reset.TabIndex = 2;
            this.btn_reset.Text = "Reset";
            this.btn_reset.UseVisualStyleBackColor = true;
            this.btn_reset.Click += new System.EventHandler(this.btn_reset_Click);
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(330, 386);
            this.Controls.Add(this.btn_reset);
            this.Controls.Add(this.btn_equipo2);
            this.Controls.Add(this.btn_equipo1);
            this.Controls.Add(this.txt_limite);
            this.Controls.Add(this.lb_puntos);
            this.Controls.Add(this.lb_limite);
            this.Name = "Form1";
            this.Text = "Score Keeper";
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label lb_limite;
        private System.Windows.Forms.Label lb_puntos;
        private System.Windows.Forms.TextBox txt_limite;
        private System.Windows.Forms.Button btn_equipo1;
        private System.Windows.Forms.Button btn_equipo2;
        private System.Windows.Forms.Button btn_reset;
    }
}

