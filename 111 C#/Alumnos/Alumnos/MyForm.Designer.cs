namespace Alumnos
{
    partial class MyForm
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
            this.components = new System.ComponentModel.Container();
            this.dataGrid = new System.Windows.Forms.DataGridView();
            this.pictureBox1 = new System.Windows.Forms.PictureBox();
            this.pictureBox2 = new System.Windows.Forms.PictureBox();
            this.pictureBox3 = new System.Windows.Forms.PictureBox();
            this.pictureBox4 = new System.Windows.Forms.PictureBox();
            this.lb_no_control = new System.Windows.Forms.Label();
            this.txt_no_control = new System.Windows.Forms.TextBox();
            this.txt_nombre = new System.Windows.Forms.TextBox();
            this.lb_nombre = new System.Windows.Forms.Label();
            this.txt_aPaterno = new System.Windows.Forms.TextBox();
            this.lb_aPaterno = new System.Windows.Forms.Label();
            this.txt_aMaterno = new System.Windows.Forms.TextBox();
            this.lb_aMaterno = new System.Windows.Forms.Label();
            this.pictureBox5 = new System.Windows.Forms.PictureBox();
            this.pictureBox6 = new System.Windows.Forms.PictureBox();
            this.toolTip = new System.Windows.Forms.ToolTip(this.components);
            this.textBox1 = new System.Windows.Forms.TextBox();
            ((System.ComponentModel.ISupportInitialize)(this.dataGrid)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox1)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox2)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox3)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox4)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox5)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox6)).BeginInit();
            this.SuspendLayout();
            // 
            // dataGrid
            // 
            this.dataGrid.AllowUserToAddRows = false;
            this.dataGrid.AllowUserToDeleteRows = false;
            this.dataGrid.AllowUserToResizeRows = false;
            this.dataGrid.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dataGrid.Location = new System.Drawing.Point(35, 254);
            this.dataGrid.MultiSelect = false;
            this.dataGrid.Name = "dataGrid";
            this.dataGrid.ReadOnly = true;
            this.dataGrid.SelectionMode = System.Windows.Forms.DataGridViewSelectionMode.FullRowSelect;
            this.dataGrid.Size = new System.Drawing.Size(450, 222);
            this.dataGrid.TabIndex = 6;
            this.dataGrid.Click += new System.EventHandler(this.dataGrid_Click);
            // 
            // pictureBox1
            // 
            this.pictureBox1.Cursor = System.Windows.Forms.Cursors.Hand;
            this.pictureBox1.Image = global::Alumnos.Properties.Resources.insert;
            this.pictureBox1.Location = new System.Drawing.Point(245, 12);
            this.pictureBox1.Name = "pictureBox1";
            this.pictureBox1.Size = new System.Drawing.Size(50, 50);
            this.pictureBox1.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.pictureBox1.TabIndex = 7;
            this.pictureBox1.TabStop = false;
            this.toolTip.SetToolTip(this.pictureBox1, "Nuevo Registro");
            this.pictureBox1.Click += new System.EventHandler(this.insert_Click);
            // 
            // pictureBox2
            // 
            this.pictureBox2.Cursor = System.Windows.Forms.Cursors.Hand;
            this.pictureBox2.Image = global::Alumnos.Properties.Resources.delete;
            this.pictureBox2.Location = new System.Drawing.Point(317, 12);
            this.pictureBox2.Name = "pictureBox2";
            this.pictureBox2.Size = new System.Drawing.Size(50, 50);
            this.pictureBox2.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.pictureBox2.TabIndex = 8;
            this.pictureBox2.TabStop = false;
            this.toolTip.SetToolTip(this.pictureBox2, "Borrar Registro");
            this.pictureBox2.Click += new System.EventHandler(this.delete_Click);
            // 
            // pictureBox3
            // 
            this.pictureBox3.Cursor = System.Windows.Forms.Cursors.Hand;
            this.pictureBox3.Image = global::Alumnos.Properties.Resources.update;
            this.pictureBox3.Location = new System.Drawing.Point(389, 12);
            this.pictureBox3.Name = "pictureBox3";
            this.pictureBox3.Size = new System.Drawing.Size(50, 50);
            this.pictureBox3.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.pictureBox3.TabIndex = 9;
            this.pictureBox3.TabStop = false;
            this.toolTip.SetToolTip(this.pictureBox3, "Editar Registro");
            this.pictureBox3.Click += new System.EventHandler(this.update_Click);
            // 
            // pictureBox4
            // 
            this.pictureBox4.Cursor = System.Windows.Forms.Cursors.Hand;
            this.pictureBox4.Image = global::Alumnos.Properties.Resources.select;
            this.pictureBox4.Location = new System.Drawing.Point(461, 12);
            this.pictureBox4.Name = "pictureBox4";
            this.pictureBox4.Size = new System.Drawing.Size(50, 50);
            this.pictureBox4.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.pictureBox4.TabIndex = 10;
            this.pictureBox4.TabStop = false;
            this.toolTip.SetToolTip(this.pictureBox4, "Buscar Registro");
            this.pictureBox4.Click += new System.EventHandler(this.select_Click);
            // 
            // lb_no_control
            // 
            this.lb_no_control.AutoSize = true;
            this.lb_no_control.Font = new System.Drawing.Font("Arial", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lb_no_control.Location = new System.Drawing.Point(15, 61);
            this.lb_no_control.Name = "lb_no_control";
            this.lb_no_control.Size = new System.Drawing.Size(86, 18);
            this.lb_no_control.TabIndex = 11;
            this.lb_no_control.Text = "No. Control";
            // 
            // txt_no_control
            // 
            this.txt_no_control.Enabled = false;
            this.txt_no_control.Font = new System.Drawing.Font("Arial", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txt_no_control.Location = new System.Drawing.Point(107, 57);
            this.txt_no_control.Name = "txt_no_control";
            this.txt_no_control.Size = new System.Drawing.Size(100, 26);
            this.txt_no_control.TabIndex = 12;
            // 
            // txt_nombre
            // 
            this.txt_nombre.Enabled = false;
            this.txt_nombre.Font = new System.Drawing.Font("Arial", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txt_nombre.Location = new System.Drawing.Point(35, 149);
            this.txt_nombre.Name = "txt_nombre";
            this.txt_nombre.Size = new System.Drawing.Size(130, 26);
            this.txt_nombre.TabIndex = 14;
            // 
            // lb_nombre
            // 
            this.lb_nombre.AutoSize = true;
            this.lb_nombre.Font = new System.Drawing.Font("Arial", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lb_nombre.Location = new System.Drawing.Point(34, 121);
            this.lb_nombre.Name = "lb_nombre";
            this.lb_nombre.Size = new System.Drawing.Size(64, 18);
            this.lb_nombre.TabIndex = 13;
            this.lb_nombre.Text = "Nombre";
            // 
            // txt_aPaterno
            // 
            this.txt_aPaterno.Enabled = false;
            this.txt_aPaterno.Font = new System.Drawing.Font("Arial", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txt_aPaterno.Location = new System.Drawing.Point(185, 149);
            this.txt_aPaterno.Name = "txt_aPaterno";
            this.txt_aPaterno.Size = new System.Drawing.Size(140, 26);
            this.txt_aPaterno.TabIndex = 16;
            // 
            // lb_aPaterno
            // 
            this.lb_aPaterno.AutoSize = true;
            this.lb_aPaterno.Font = new System.Drawing.Font("Arial", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lb_aPaterno.Location = new System.Drawing.Point(188, 121);
            this.lb_aPaterno.Name = "lb_aPaterno";
            this.lb_aPaterno.Size = new System.Drawing.Size(82, 18);
            this.lb_aPaterno.TabIndex = 15;
            this.lb_aPaterno.Text = "A. Paterno";
            // 
            // txt_aMaterno
            // 
            this.txt_aMaterno.Enabled = false;
            this.txt_aMaterno.Font = new System.Drawing.Font("Arial", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txt_aMaterno.Location = new System.Drawing.Point(345, 149);
            this.txt_aMaterno.Name = "txt_aMaterno";
            this.txt_aMaterno.Size = new System.Drawing.Size(140, 26);
            this.txt_aMaterno.TabIndex = 18;
            // 
            // lb_aMaterno
            // 
            this.lb_aMaterno.AutoSize = true;
            this.lb_aMaterno.Font = new System.Drawing.Font("Arial", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lb_aMaterno.Location = new System.Drawing.Point(346, 121);
            this.lb_aMaterno.Name = "lb_aMaterno";
            this.lb_aMaterno.Size = new System.Drawing.Size(84, 18);
            this.lb_aMaterno.TabIndex = 17;
            this.lb_aMaterno.Text = "A. Materno";
            // 
            // pictureBox5
            // 
            this.pictureBox5.Cursor = System.Windows.Forms.Cursors.Hand;
            this.pictureBox5.Image = global::Alumnos.Properties.Resources.next;
            this.pictureBox5.Location = new System.Drawing.Point(273, 189);
            this.pictureBox5.Name = "pictureBox5";
            this.pictureBox5.Size = new System.Drawing.Size(50, 50);
            this.pictureBox5.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.pictureBox5.TabIndex = 20;
            this.pictureBox5.TabStop = false;
            this.toolTip.SetToolTip(this.pictureBox5, "Registro Siguiente");
            this.pictureBox5.Click += new System.EventHandler(this.next_Click);
            // 
            // pictureBox6
            // 
            this.pictureBox6.Cursor = System.Windows.Forms.Cursors.Hand;
            this.pictureBox6.Image = global::Alumnos.Properties.Resources.back;
            this.pictureBox6.Location = new System.Drawing.Point(201, 189);
            this.pictureBox6.Name = "pictureBox6";
            this.pictureBox6.Size = new System.Drawing.Size(50, 50);
            this.pictureBox6.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.pictureBox6.TabIndex = 19;
            this.pictureBox6.TabStop = false;
            this.toolTip.SetToolTip(this.pictureBox6, "Registro Anterior");
            // 
            // textBox1
            // 
            this.textBox1.Enabled = false;
            this.textBox1.Font = new System.Drawing.Font("Arial", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.textBox1.Location = new System.Drawing.Point(107, 25);
            this.textBox1.Name = "textBox1";
            this.textBox1.Size = new System.Drawing.Size(100, 26);
            this.textBox1.TabIndex = 21;
            // 
            // MyForm
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.SystemColors.WindowFrame;
            this.ClientSize = new System.Drawing.Size(523, 498);
            this.Controls.Add(this.textBox1);
            this.Controls.Add(this.pictureBox5);
            this.Controls.Add(this.pictureBox6);
            this.Controls.Add(this.txt_aMaterno);
            this.Controls.Add(this.lb_aMaterno);
            this.Controls.Add(this.txt_aPaterno);
            this.Controls.Add(this.lb_aPaterno);
            this.Controls.Add(this.txt_nombre);
            this.Controls.Add(this.lb_nombre);
            this.Controls.Add(this.txt_no_control);
            this.Controls.Add(this.lb_no_control);
            this.Controls.Add(this.pictureBox4);
            this.Controls.Add(this.pictureBox3);
            this.Controls.Add(this.pictureBox2);
            this.Controls.Add(this.pictureBox1);
            this.Controls.Add(this.dataGrid);
            this.Cursor = System.Windows.Forms.Cursors.Default;
            this.Icon = global::Alumnos.Properties.Resources.alumnos;
            this.Name = "MyForm";
            this.Text = "Alumnos";
            this.Load += new System.EventHandler(this.MyForm_Load);
            ((System.ComponentModel.ISupportInitialize)(this.dataGrid)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox1)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox2)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox3)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox4)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox5)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox6)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion
        private System.Windows.Forms.DataGridView dataGrid;
        private System.Windows.Forms.PictureBox pictureBox1;
        private System.Windows.Forms.PictureBox pictureBox2;
        private System.Windows.Forms.PictureBox pictureBox3;
        private System.Windows.Forms.PictureBox pictureBox4;
        private System.Windows.Forms.Label lb_no_control;
        private System.Windows.Forms.TextBox txt_no_control;
        private System.Windows.Forms.TextBox txt_nombre;
        private System.Windows.Forms.Label lb_nombre;
        private System.Windows.Forms.TextBox txt_aPaterno;
        private System.Windows.Forms.Label lb_aPaterno;
        private System.Windows.Forms.TextBox txt_aMaterno;
        private System.Windows.Forms.Label lb_aMaterno;
        private System.Windows.Forms.PictureBox pictureBox5;
        private System.Windows.Forms.PictureBox pictureBox6;
        private System.Windows.Forms.ToolTip toolTip;
        private System.Windows.Forms.TextBox textBox1;
    }
}