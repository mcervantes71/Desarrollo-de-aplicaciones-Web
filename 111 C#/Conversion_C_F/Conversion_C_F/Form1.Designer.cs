namespace Conversion_C_F
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
            this.trk_celsius = new System.Windows.Forms.TrackBar();
            this.trk_fahrenheit = new System.Windows.Forms.TrackBar();
            this.trk_kelvin = new System.Windows.Forms.TrackBar();
            this.lb_celsuis = new System.Windows.Forms.Label();
            this.lb_fahrenheit = new System.Windows.Forms.Label();
            this.lb_kelvin = new System.Windows.Forms.Label();
            ((System.ComponentModel.ISupportInitialize)(this.trk_celsius)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.trk_fahrenheit)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.trk_kelvin)).BeginInit();
            this.SuspendLayout();
            // 
            // trk_celsius
            // 
            this.trk_celsius.Location = new System.Drawing.Point(75, 76);
            this.trk_celsius.Maximum = 100;
            this.trk_celsius.Name = "trk_celsius";
            this.trk_celsius.Orientation = System.Windows.Forms.Orientation.Vertical;
            this.trk_celsius.Size = new System.Drawing.Size(45, 200);
            this.trk_celsius.TabIndex = 0;
            this.trk_celsius.Scroll += new System.EventHandler(this.trk_celsius_Scroll);
            // 
            // trk_fahrenheit
            // 
            this.trk_fahrenheit.Location = new System.Drawing.Point(208, 76);
            this.trk_fahrenheit.Maximum = 212;
            this.trk_fahrenheit.Minimum = 32;
            this.trk_fahrenheit.Name = "trk_fahrenheit";
            this.trk_fahrenheit.Orientation = System.Windows.Forms.Orientation.Vertical;
            this.trk_fahrenheit.Size = new System.Drawing.Size(45, 200);
            this.trk_fahrenheit.TabIndex = 1;
            this.trk_fahrenheit.Value = 32;
            this.trk_fahrenheit.Scroll += new System.EventHandler(this.trk_fahrenheit_Scroll);
            // 
            // trk_kelvin
            // 
            this.trk_kelvin.Location = new System.Drawing.Point(355, 76);
            this.trk_kelvin.Maximum = 373;
            this.trk_kelvin.Minimum = 273;
            this.trk_kelvin.Name = "trk_kelvin";
            this.trk_kelvin.Orientation = System.Windows.Forms.Orientation.Vertical;
            this.trk_kelvin.Size = new System.Drawing.Size(45, 200);
            this.trk_kelvin.TabIndex = 2;
            this.trk_kelvin.Value = 273;
            this.trk_kelvin.Scroll += new System.EventHandler(this.trk_kelvin_Scroll);
            // 
            // lb_celsuis
            // 
            this.lb_celsuis.AutoSize = true;
            this.lb_celsuis.Location = new System.Drawing.Point(76, 31);
            this.lb_celsuis.Name = "lb_celsuis";
            this.lb_celsuis.Size = new System.Drawing.Size(27, 13);
            this.lb_celsuis.TabIndex = 3;
            this.lb_celsuis.Text = "0 ºC";
            // 
            // lb_fahrenheit
            // 
            this.lb_fahrenheit.AutoSize = true;
            this.lb_fahrenheit.Location = new System.Drawing.Point(205, 31);
            this.lb_fahrenheit.Name = "lb_fahrenheit";
            this.lb_fahrenheit.Size = new System.Drawing.Size(32, 13);
            this.lb_fahrenheit.TabIndex = 4;
            this.lb_fahrenheit.Text = "32 ºF";
            // 
            // lb_kelvin
            // 
            this.lb_kelvin.AutoSize = true;
            this.lb_kelvin.Location = new System.Drawing.Point(352, 31);
            this.lb_kelvin.Name = "lb_kelvin";
            this.lb_kelvin.Size = new System.Drawing.Size(39, 13);
            this.lb_kelvin.TabIndex = 5;
            this.lb_kelvin.Text = "273 ºK";
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(480, 374);
            this.Controls.Add(this.lb_kelvin);
            this.Controls.Add(this.lb_fahrenheit);
            this.Controls.Add(this.lb_celsuis);
            this.Controls.Add(this.trk_celsius);
            this.Controls.Add(this.trk_fahrenheit);
            this.Controls.Add(this.trk_kelvin);
            this.Icon = ((System.Drawing.Icon)(resources.GetObject("$this.Icon")));
            this.Name = "Form1";
            this.Text = "Celsius - Fahrenheit - Kelvin";
            ((System.ComponentModel.ISupportInitialize)(this.trk_celsius)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.trk_fahrenheit)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.trk_kelvin)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion
        private System.Windows.Forms.TrackBar trk_celsius;
        private System.Windows.Forms.TrackBar trk_fahrenheit;
        private System.Windows.Forms.TrackBar trk_kelvin;
        private System.Windows.Forms.Label lb_celsuis;
        private System.Windows.Forms.Label lb_fahrenheit;
        private System.Windows.Forms.Label lb_kelvin;
    }
}

