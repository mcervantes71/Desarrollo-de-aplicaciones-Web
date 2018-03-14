namespace WindowsFormsApp1
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
            this.conexion = new System.Windows.Forms.Button();
            this.nuevo = new System.Windows.Forms.Button();
            this.consultas = new System.Windows.Forms.Button();
            this.borrar = new System.Windows.Forms.Button();
            this.actualizar = new System.Windows.Forms.Button();
            this.SuspendLayout();
            // 
            // conexion
            // 
            this.conexion.Location = new System.Drawing.Point(40, 28);
            this.conexion.Name = "conexion";
            this.conexion.Size = new System.Drawing.Size(121, 68);
            this.conexion.TabIndex = 0;
            this.conexion.Text = "Conexion";
            this.conexion.UseVisualStyleBackColor = true;
            this.conexion.Click += new System.EventHandler(this.conexion_Click);
            // 
            // nuevo
            // 
            this.nuevo.Location = new System.Drawing.Point(381, 28);
            this.nuevo.Name = "nuevo";
            this.nuevo.Size = new System.Drawing.Size(121, 68);
            this.nuevo.TabIndex = 1;
            this.nuevo.Text = "Nuevo";
            this.nuevo.UseVisualStyleBackColor = true;
            // 
            // consultas
            // 
            this.consultas.Location = new System.Drawing.Point(40, 131);
            this.consultas.Name = "consultas";
            this.consultas.Size = new System.Drawing.Size(121, 68);
            this.consultas.TabIndex = 2;
            this.consultas.Text = "Consultas";
            this.consultas.UseVisualStyleBackColor = true;
            // 
            // borrar
            // 
            this.borrar.Location = new System.Drawing.Point(212, 131);
            this.borrar.Name = "borrar";
            this.borrar.Size = new System.Drawing.Size(121, 68);
            this.borrar.TabIndex = 3;
            this.borrar.Text = "Borrar";
            this.borrar.UseVisualStyleBackColor = true;
            // 
            // actualizar
            // 
            this.actualizar.Location = new System.Drawing.Point(381, 131);
            this.actualizar.Name = "actualizar";
            this.actualizar.Size = new System.Drawing.Size(121, 68);
            this.actualizar.TabIndex = 4;
            this.actualizar.Text = "Actualizar";
            this.actualizar.UseVisualStyleBackColor = true;
            // 
            // MyForm
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(542, 242);
            this.Controls.Add(this.actualizar);
            this.Controls.Add(this.borrar);
            this.Controls.Add(this.consultas);
            this.Controls.Add(this.nuevo);
            this.Controls.Add(this.conexion);
            this.Name = "MyForm";
            this.Text = "Simple SQL Server Conection";
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.Button conexion;
        private System.Windows.Forms.Button nuevo;
        private System.Windows.Forms.Button consultas;
        private System.Windows.Forms.Button borrar;
        private System.Windows.Forms.Button actualizar;
    }
}

