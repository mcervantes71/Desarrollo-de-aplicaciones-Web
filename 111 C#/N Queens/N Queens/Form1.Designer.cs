namespace N_Queens
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
            this.txtN = new System.Windows.Forms.TextBox();
            this.lblN = new System.Windows.Forms.Label();
            this.pnlChess = new System.Windows.Forms.Panel();
            this.btnSolve = new System.Windows.Forms.Button();
            this.txtTime = new System.Windows.Forms.TextBox();
            this.lblTime = new System.Windows.Forms.Label();
            this.txtAttempts = new System.Windows.Forms.TextBox();
            this.lblAttempts = new System.Windows.Forms.Label();
            this.txtSolutions = new System.Windows.Forms.TextBox();
            this.lblSolutions = new System.Windows.Forms.Label();
            this.lsbSolutions = new System.Windows.Forms.ListBox();
            this.cmbAlgorithm = new System.Windows.Forms.ComboBox();
            this.panel2 = new System.Windows.Forms.Panel();
            this.groupBox2 = new System.Windows.Forms.GroupBox();
            this.panel2.SuspendLayout();
            this.groupBox2.SuspendLayout();
            this.SuspendLayout();
            // 
            // txtN
            // 
            this.txtN.Location = new System.Drawing.Point(114, 54);
            this.txtN.MaxLength = 2;
            this.txtN.Name = "txtN";
            this.txtN.Size = new System.Drawing.Size(43, 20);
            this.txtN.TabIndex = 1;
            this.txtN.Text = "4";
            this.txtN.KeyPress += new System.Windows.Forms.KeyPressEventHandler(this.txtN_KeyPress);
            // 
            // lblN
            // 
            this.lblN.AutoSize = true;
            this.lblN.Location = new System.Drawing.Point(7, 58);
            this.lblN.Name = "lblN";
            this.lblN.Size = new System.Drawing.Size(101, 13);
            this.lblN.TabIndex = 7;
            this.lblN.Text = "Number Of Queens:";
            // 
            // pnlChess
            // 
            this.pnlChess.BackColor = System.Drawing.SystemColors.AppWorkspace;
            this.pnlChess.Location = new System.Drawing.Point(210, 15);
            this.pnlChess.Name = "pnlChess";
            this.pnlChess.Size = new System.Drawing.Size(550, 550);
            this.pnlChess.TabIndex = 6;
            // 
            // btnSolve
            // 
            this.btnSolve.Location = new System.Drawing.Point(24, 103);
            this.btnSolve.Name = "btnSolve";
            this.btnSolve.Size = new System.Drawing.Size(131, 28);
            this.btnSolve.TabIndex = 2;
            this.btnSolve.Text = "Start Solving";
            this.btnSolve.UseVisualStyleBackColor = true;
            this.btnSolve.Click += new System.EventHandler(this.btnSolve_Click);
            // 
            // txtTime
            // 
            this.txtTime.BackColor = System.Drawing.SystemColors.Window;
            this.txtTime.Enabled = false;
            this.txtTime.Location = new System.Drawing.Point(91, 24);
            this.txtTime.Name = "txtTime";
            this.txtTime.ReadOnly = true;
            this.txtTime.Size = new System.Drawing.Size(75, 20);
            this.txtTime.TabIndex = 11;
            this.txtTime.Text = "0";
            // 
            // lblTime
            // 
            this.lblTime.AutoSize = true;
            this.lblTime.Location = new System.Drawing.Point(16, 27);
            this.lblTime.Name = "lblTime";
            this.lblTime.Size = new System.Drawing.Size(67, 13);
            this.lblTime.TabIndex = 10;
            this.lblTime.Text = "Milliseconds:";
            // 
            // txtAttempts
            // 
            this.txtAttempts.BackColor = System.Drawing.SystemColors.Window;
            this.txtAttempts.Enabled = false;
            this.txtAttempts.Location = new System.Drawing.Point(91, 59);
            this.txtAttempts.Name = "txtAttempts";
            this.txtAttempts.ReadOnly = true;
            this.txtAttempts.Size = new System.Drawing.Size(75, 20);
            this.txtAttempts.TabIndex = 13;
            this.txtAttempts.Text = "0";
            // 
            // lblAttempts
            // 
            this.lblAttempts.AutoSize = true;
            this.lblAttempts.Location = new System.Drawing.Point(16, 62);
            this.lblAttempts.Name = "lblAttempts";
            this.lblAttempts.Size = new System.Drawing.Size(51, 13);
            this.lblAttempts.TabIndex = 12;
            this.lblAttempts.Text = "Attempts:";
            // 
            // txtSolutions
            // 
            this.txtSolutions.BackColor = System.Drawing.SystemColors.Window;
            this.txtSolutions.Enabled = false;
            this.txtSolutions.Location = new System.Drawing.Point(91, 98);
            this.txtSolutions.Name = "txtSolutions";
            this.txtSolutions.ReadOnly = true;
            this.txtSolutions.Size = new System.Drawing.Size(75, 20);
            this.txtSolutions.TabIndex = 15;
            this.txtSolutions.Text = "0";
            // 
            // lblSolutions
            // 
            this.lblSolutions.AutoSize = true;
            this.lblSolutions.Location = new System.Drawing.Point(16, 101);
            this.lblSolutions.Name = "lblSolutions";
            this.lblSolutions.Size = new System.Drawing.Size(63, 13);
            this.lblSolutions.TabIndex = 14;
            this.lblSolutions.Text = "# Solutions:";
            // 
            // lsbSolutions
            // 
            this.lsbSolutions.FormattingEnabled = true;
            this.lsbSolutions.Location = new System.Drawing.Point(19, 145);
            this.lsbSolutions.Name = "lsbSolutions";
            this.lsbSolutions.Size = new System.Drawing.Size(138, 225);
            this.lsbSolutions.TabIndex = 3;
            this.lsbSolutions.SelectedIndexChanged += new System.EventHandler(this.lsbSolutions_SelectedIndexChanged);
            // 
            // cmbAlgorithm
            // 
            this.cmbAlgorithm.FormattingEnabled = true;
            this.cmbAlgorithm.Items.AddRange(new object[] {
            "BFS",
            "DFS",
            "IS"});
            this.cmbAlgorithm.Location = new System.Drawing.Point(24, 18);
            this.cmbAlgorithm.Name = "cmbAlgorithm";
            this.cmbAlgorithm.Size = new System.Drawing.Size(49, 21);
            this.cmbAlgorithm.TabIndex = 4;
            // 
            // panel2
            // 
            this.panel2.BackColor = System.Drawing.SystemColors.AppWorkspace;
            this.panel2.Controls.Add(this.cmbAlgorithm);
            this.panel2.Controls.Add(this.btnSolve);
            this.panel2.Controls.Add(this.lblN);
            this.panel2.Controls.Add(this.txtN);
            this.panel2.Location = new System.Drawing.Point(15, 15);
            this.panel2.Name = "panel2";
            this.panel2.Size = new System.Drawing.Size(180, 140);
            this.panel2.TabIndex = 18;
            // 
            // groupBox2
            // 
            this.groupBox2.BackColor = System.Drawing.SystemColors.AppWorkspace;
            this.groupBox2.Controls.Add(this.txtTime);
            this.groupBox2.Controls.Add(this.lblTime);
            this.groupBox2.Controls.Add(this.lblSolutions);
            this.groupBox2.Controls.Add(this.lsbSolutions);
            this.groupBox2.Controls.Add(this.txtAttempts);
            this.groupBox2.Controls.Add(this.lblAttempts);
            this.groupBox2.Controls.Add(this.txtSolutions);
            this.groupBox2.Location = new System.Drawing.Point(15, 170);
            this.groupBox2.Name = "groupBox2";
            this.groupBox2.Size = new System.Drawing.Size(180, 395);
            this.groupBox2.TabIndex = 19;
            this.groupBox2.TabStop = false;
            this.groupBox2.Text = "Result:";
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(779, 581);
            this.Controls.Add(this.groupBox2);
            this.Controls.Add(this.panel2);
            this.Controls.Add(this.pnlChess);
            this.Icon = ((System.Drawing.Icon)(resources.GetObject("$this.Icon")));
            this.Name = "Form1";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "N Queens";
            this.Load += new System.EventHandler(this.Form1_Load);
            this.panel2.ResumeLayout(false);
            this.panel2.PerformLayout();
            this.groupBox2.ResumeLayout(false);
            this.groupBox2.PerformLayout();
            this.ResumeLayout(false);

        }

        #endregion
        private System.Windows.Forms.TextBox txtN;
        private System.Windows.Forms.Label lblN;
        private System.Windows.Forms.Panel pnlChess;
        private System.Windows.Forms.Button btnSolve;
        private System.Windows.Forms.TextBox txtTime;
        private System.Windows.Forms.Label lblTime;
        private System.Windows.Forms.TextBox txtAttempts;
        private System.Windows.Forms.Label lblAttempts;
        private System.Windows.Forms.TextBox txtSolutions;
        private System.Windows.Forms.Label lblSolutions;
        private System.Windows.Forms.ListBox lsbSolutions;
        private System.Windows.Forms.ComboBox cmbAlgorithm;
        private System.Windows.Forms.Panel panel2;
        private System.Windows.Forms.GroupBox groupBox2;
    }
}

