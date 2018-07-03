namespace Basketball
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
            this.unoA = new System.Windows.Forms.Button();
            this.dosA = new System.Windows.Forms.Button();
            this.tresA = new System.Windows.Forms.Button();
            this.unoB = new System.Windows.Forms.Button();
            this.dosB = new System.Windows.Forms.Button();
            this.tresB = new System.Windows.Forms.Button();
            this.lb_teamA = new System.Windows.Forms.Label();
            this.lb_teamB = new System.Windows.Forms.Label();
            this.label1 = new System.Windows.Forms.Label();
            this.label2 = new System.Windows.Forms.Label();
            this.btn_reset = new System.Windows.Forms.Button();
            this.SuspendLayout();
            // 
            // unoA
            // 
            this.unoA.Font = new System.Drawing.Font("Microsoft Sans Serif", 15.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.unoA.Location = new System.Drawing.Point(66, 178);
            this.unoA.Name = "unoA";
            this.unoA.Size = new System.Drawing.Size(72, 49);
            this.unoA.TabIndex = 0;
            this.unoA.Text = "+ 1";
            this.unoA.UseVisualStyleBackColor = true;
            this.unoA.Click += new System.EventHandler(this.unoA_Click);
            // 
            // dosA
            // 
            this.dosA.Font = new System.Drawing.Font("Microsoft Sans Serif", 15.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.dosA.Location = new System.Drawing.Point(66, 231);
            this.dosA.Name = "dosA";
            this.dosA.Size = new System.Drawing.Size(72, 49);
            this.dosA.TabIndex = 1;
            this.dosA.Text = "+ 2";
            this.dosA.UseVisualStyleBackColor = true;
            this.dosA.Click += new System.EventHandler(this.dosA_Click);
            // 
            // tresA
            // 
            this.tresA.Font = new System.Drawing.Font("Microsoft Sans Serif", 15.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.tresA.Location = new System.Drawing.Point(66, 284);
            this.tresA.Name = "tresA";
            this.tresA.Size = new System.Drawing.Size(72, 49);
            this.tresA.TabIndex = 2;
            this.tresA.Text = "+ 3";
            this.tresA.UseVisualStyleBackColor = true;
            this.tresA.Click += new System.EventHandler(this.tresA_Click);
            // 
            // unoB
            // 
            this.unoB.Font = new System.Drawing.Font("Microsoft Sans Serif", 15.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.unoB.Location = new System.Drawing.Point(199, 178);
            this.unoB.Name = "unoB";
            this.unoB.Size = new System.Drawing.Size(72, 49);
            this.unoB.TabIndex = 5;
            this.unoB.Text = "+ 1";
            this.unoB.UseVisualStyleBackColor = true;
            this.unoB.Click += new System.EventHandler(this.unoB_Click);
            // 
            // dosB
            // 
            this.dosB.Font = new System.Drawing.Font("Microsoft Sans Serif", 15.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.dosB.Location = new System.Drawing.Point(199, 231);
            this.dosB.Name = "dosB";
            this.dosB.Size = new System.Drawing.Size(72, 49);
            this.dosB.TabIndex = 4;
            this.dosB.Text = "+ 2";
            this.dosB.UseVisualStyleBackColor = true;
            this.dosB.Click += new System.EventHandler(this.dosB_Click);
            // 
            // tresB
            // 
            this.tresB.Font = new System.Drawing.Font("Microsoft Sans Serif", 15.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.tresB.Location = new System.Drawing.Point(199, 284);
            this.tresB.Name = "tresB";
            this.tresB.Size = new System.Drawing.Size(72, 49);
            this.tresB.TabIndex = 3;
            this.tresB.Text = "+ 3";
            this.tresB.UseVisualStyleBackColor = true;
            this.tresB.Click += new System.EventHandler(this.tresB_Click);
            // 
            // lb_teamA
            // 
            this.lb_teamA.AutoSize = true;
            this.lb_teamA.Font = new System.Drawing.Font("Consolas", 60F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lb_teamA.Location = new System.Drawing.Point(50, 63);
            this.lb_teamA.Name = "lb_teamA";
            this.lb_teamA.Size = new System.Drawing.Size(84, 94);
            this.lb_teamA.TabIndex = 6;
            this.lb_teamA.Text = "0";
            // 
            // lb_teamB
            // 
            this.lb_teamB.AutoSize = true;
            this.lb_teamB.Font = new System.Drawing.Font("Consolas", 60F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lb_teamB.Location = new System.Drawing.Point(183, 63);
            this.lb_teamB.Name = "lb_teamB";
            this.lb_teamB.Size = new System.Drawing.Size(84, 94);
            this.lb_teamB.TabIndex = 7;
            this.lb_teamB.Text = "0";
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Font = new System.Drawing.Font("Gadugi", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label1.Location = new System.Drawing.Point(201, 24);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(72, 22);
            this.label1.TabIndex = 9;
            this.label1.Text = "Team B";
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Font = new System.Drawing.Font("Gadugi", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label2.Location = new System.Drawing.Point(68, 24);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(73, 22);
            this.label2.TabIndex = 8;
            this.label2.Text = "Team A";
            // 
            // btn_reset
            // 
            this.btn_reset.Location = new System.Drawing.Point(135, 370);
            this.btn_reset.Name = "btn_reset";
            this.btn_reset.Size = new System.Drawing.Size(75, 23);
            this.btn_reset.TabIndex = 10;
            this.btn_reset.Text = "Reset";
            this.btn_reset.UseVisualStyleBackColor = true;
            this.btn_reset.Click += new System.EventHandler(this.btn_reset_Click);
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackgroundImageLayout = System.Windows.Forms.ImageLayout.Zoom;
            this.ClientSize = new System.Drawing.Size(339, 419);
            this.Controls.Add(this.btn_reset);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.lb_teamB);
            this.Controls.Add(this.lb_teamA);
            this.Controls.Add(this.unoB);
            this.Controls.Add(this.dosB);
            this.Controls.Add(this.tresB);
            this.Controls.Add(this.tresA);
            this.Controls.Add(this.dosA);
            this.Controls.Add(this.unoA);
            this.Name = "Form1";
            this.Text = "Basketball";
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Button unoA;
        private System.Windows.Forms.Button dosA;
        private System.Windows.Forms.Button tresA;
        private System.Windows.Forms.Button unoB;
        private System.Windows.Forms.Button dosB;
        private System.Windows.Forms.Button tresB;
        private System.Windows.Forms.Label lb_teamA;
        private System.Windows.Forms.Label lb_teamB;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.Button btn_reset;
    }
}

