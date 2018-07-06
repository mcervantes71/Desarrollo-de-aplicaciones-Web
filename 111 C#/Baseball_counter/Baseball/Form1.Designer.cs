namespace Baseball
{
    partial class Form1
    {
        private System.Windows.Forms.Label lb_teamA;
        private System.Windows.Forms.Label lb_teamB;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Button btn_outs;
        private System.Windows.Forms.Button btn_score;
        private System.Windows.Forms.Button btn_balls;
        private System.Windows.Forms.Button btn_strike;

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
            this.lb_teamA = new System.Windows.Forms.Label();
            this.lb_teamB = new System.Windows.Forms.Label();
            this.label2 = new System.Windows.Forms.Label();
            this.label1 = new System.Windows.Forms.Label();
            this.btn_outs = new System.Windows.Forms.Button();
            this.btn_score = new System.Windows.Forms.Button();
            this.btn_balls = new System.Windows.Forms.Button();
            this.btn_strike = new System.Windows.Forms.Button();
            this.lb_outs = new System.Windows.Forms.Label();
            this.lb_ball = new System.Windows.Forms.Label();
            this.lb_strike = new System.Windows.Forms.Label();
            this.lb_inning = new System.Windows.Forms.Label();
            this.label3 = new System.Windows.Forms.Label();
            this.btn_Reset = new System.Windows.Forms.Button();
            this.SuspendLayout();
            // 
            // lb_teamA
            // 
            this.lb_teamA.AutoSize = true;
            this.lb_teamA.Font = new System.Drawing.Font("Consolas", 60F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lb_teamA.Location = new System.Drawing.Point(16, 63);
            this.lb_teamA.Name = "lb_teamA";
            this.lb_teamA.Size = new System.Drawing.Size(84, 94);
            this.lb_teamA.TabIndex = 6;
            this.lb_teamA.Text = "0";
            // 
            // lb_teamB
            // 
            this.lb_teamB.AutoSize = true;
            this.lb_teamB.Font = new System.Drawing.Font("Consolas", 60F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lb_teamB.Location = new System.Drawing.Point(197, 63);
            this.lb_teamB.Name = "lb_teamB";
            this.lb_teamB.Size = new System.Drawing.Size(84, 94);
            this.lb_teamB.TabIndex = 7;
            this.lb_teamB.Text = "0";
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Font = new System.Drawing.Font("Gadugi", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label2.Location = new System.Drawing.Point(215, 44);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(72, 22);
            this.label2.TabIndex = 9;
            this.label2.Text = "Team B";
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Font = new System.Drawing.Font("Gadugi", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label1.Location = new System.Drawing.Point(34, 44);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(73, 22);
            this.label1.TabIndex = 8;
            this.label1.Text = "Team A";
            // 
            // btn_outs
            // 
            this.btn_outs.Location = new System.Drawing.Point(89, 213);
            this.btn_outs.Name = "btn_outs";
            this.btn_outs.Size = new System.Drawing.Size(63, 60);
            this.btn_outs.TabIndex = 0;
            this.btn_outs.Text = "Outs";
            this.btn_outs.UseVisualStyleBackColor = true;
            this.btn_outs.Click += new System.EventHandler(this.Outs_Click);
            // 
            // btn_score
            // 
            this.btn_score.Location = new System.Drawing.Point(116, 137);
            this.btn_score.Name = "btn_score";
            this.btn_score.Size = new System.Drawing.Size(75, 50);
            this.btn_score.TabIndex = 1;
            this.btn_score.Text = "Score\r\nTeam A";
            this.btn_score.UseVisualStyleBackColor = true;
            this.btn_score.Click += new System.EventHandler(this.Score_Click);
            // 
            // btn_balls
            // 
            this.btn_balls.Location = new System.Drawing.Point(89, 344);
            this.btn_balls.Name = "btn_balls";
            this.btn_balls.Size = new System.Drawing.Size(63, 60);
            this.btn_balls.TabIndex = 2;
            this.btn_balls.Text = "Ball";
            this.btn_balls.UseVisualStyleBackColor = true;
            this.btn_balls.Click += new System.EventHandler(this.Ball_Click);
            // 
            // btn_strike
            // 
            this.btn_strike.Location = new System.Drawing.Point(89, 279);
            this.btn_strike.Name = "btn_strike";
            this.btn_strike.Size = new System.Drawing.Size(63, 60);
            this.btn_strike.TabIndex = 3;
            this.btn_strike.Text = "Strikes";
            this.btn_strike.UseVisualStyleBackColor = true;
            this.btn_strike.Click += new System.EventHandler(this.Strikes_Click);
            // 
            // lb_outs
            // 
            this.lb_outs.AutoSize = true;
            this.lb_outs.Font = new System.Drawing.Font("Consolas", 26.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lb_outs.Location = new System.Drawing.Point(183, 222);
            this.lb_outs.Name = "lb_outs";
            this.lb_outs.Size = new System.Drawing.Size(37, 41);
            this.lb_outs.TabIndex = 10;
            this.lb_outs.Text = "0";
            // 
            // lb_ball
            // 
            this.lb_ball.AutoSize = true;
            this.lb_ball.Font = new System.Drawing.Font("Consolas", 26.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lb_ball.Location = new System.Drawing.Point(183, 353);
            this.lb_ball.Name = "lb_ball";
            this.lb_ball.Size = new System.Drawing.Size(37, 41);
            this.lb_ball.TabIndex = 11;
            this.lb_ball.Text = "0";
            // 
            // lb_strike
            // 
            this.lb_strike.AutoSize = true;
            this.lb_strike.Font = new System.Drawing.Font("Consolas", 26.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lb_strike.Location = new System.Drawing.Point(183, 287);
            this.lb_strike.Name = "lb_strike";
            this.lb_strike.Size = new System.Drawing.Size(37, 41);
            this.lb_strike.TabIndex = 12;
            this.lb_strike.Text = "0";
            // 
            // lb_inning
            // 
            this.lb_inning.AutoSize = true;
            this.lb_inning.Font = new System.Drawing.Font("Consolas", 26.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lb_inning.Location = new System.Drawing.Point(138, 30);
            this.lb_inning.Name = "lb_inning";
            this.lb_inning.Size = new System.Drawing.Size(37, 41);
            this.lb_inning.TabIndex = 13;
            this.lb_inning.Text = "1";
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.Font = new System.Drawing.Font("Gadugi", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label3.Location = new System.Drawing.Point(124, 8);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(64, 22);
            this.label3.TabIndex = 14;
            this.label3.Text = "Inning";
            // 
            // btn_Reset
            // 
            this.btn_Reset.Location = new System.Drawing.Point(243, 427);
            this.btn_Reset.Name = "btn_Reset";
            this.btn_Reset.Size = new System.Drawing.Size(75, 23);
            this.btn_Reset.TabIndex = 15;
            this.btn_Reset.Text = "Reset";
            this.btn_Reset.UseVisualStyleBackColor = true;
            this.btn_Reset.Click += new System.EventHandler(this.Reset_Click);
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(317, 450);
            this.Controls.Add(this.btn_Reset);
            this.Controls.Add(this.label3);
            this.Controls.Add(this.lb_inning);
            this.Controls.Add(this.lb_strike);
            this.Controls.Add(this.lb_ball);
            this.Controls.Add(this.lb_outs);
            this.Controls.Add(this.lb_teamA);
            this.Controls.Add(this.lb_teamB);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.btn_strike);
            this.Controls.Add(this.btn_balls);
            this.Controls.Add(this.btn_score);
            this.Controls.Add(this.btn_outs);
            this.Name = "Form1";
            this.Text = "Baseball";
            this.ResumeLayout(false);
            this.PerformLayout();

        }
        #endregion

        private System.Windows.Forms.Label lb_outs;
        private System.Windows.Forms.Label lb_ball;
        private System.Windows.Forms.Label lb_strike;
        private System.Windows.Forms.Label lb_inning;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.Button btn_Reset;
    }
}