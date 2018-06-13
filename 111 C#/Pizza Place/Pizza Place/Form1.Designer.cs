namespace Pizza_Place
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
            this.groupTamaño = new System.Windows.Forms.GroupBox();
            this.Grande = new System.Windows.Forms.RadioButton();
            this.Chica = new System.Windows.Forms.RadioButton();
            this.Mediana = new System.Windows.Forms.RadioButton();
            this.groupNumero = new System.Windows.Forms.GroupBox();
            this.cuatro = new System.Windows.Forms.RadioButton();
            this.uno = new System.Windows.Forms.RadioButton();
            this.tres = new System.Windows.Forms.RadioButton();
            this.dos = new System.Windows.Forms.RadioButton();
            this.groupIngredientes = new System.Windows.Forms.GroupBox();
            this.molida = new System.Windows.Forms.CheckBox();
            this.champiñones = new System.Windows.Forms.CheckBox();
            this.piña = new System.Windows.Forms.CheckBox();
            this.extra_queso = new System.Windows.Forms.CheckBox();
            this.salami = new System.Windows.Forms.CheckBox();
            this.tocino = new System.Windows.Forms.CheckBox();
            this.jamon = new System.Windows.Forms.CheckBox();
            this.peperoni = new System.Windows.Forms.CheckBox();
            this.Calcular = new System.Windows.Forms.Button();
            this.groupTamaño.SuspendLayout();
            this.groupNumero.SuspendLayout();
            this.groupIngredientes.SuspendLayout();
            this.SuspendLayout();
            // 
            // groupTamaño
            // 
            this.groupTamaño.Controls.Add(this.Grande);
            this.groupTamaño.Controls.Add(this.Chica);
            this.groupTamaño.Controls.Add(this.Mediana);
            this.groupTamaño.Location = new System.Drawing.Point(24, 12);
            this.groupTamaño.Name = "groupTamaño";
            this.groupTamaño.Size = new System.Drawing.Size(336, 76);
            this.groupTamaño.TabIndex = 0;
            this.groupTamaño.TabStop = false;
            this.groupTamaño.Text = "Tamaño:";
            // 
            // Grande
            // 
            this.Grande.AutoSize = true;
            this.Grande.Location = new System.Drawing.Point(222, 30);
            this.Grande.Name = "Grande";
            this.Grande.Size = new System.Drawing.Size(60, 17);
            this.Grande.TabIndex = 4;
            this.Grande.Text = "Grande";
            this.Grande.UseVisualStyleBackColor = true;
            // 
            // Chica
            // 
            this.Chica.AutoSize = true;
            this.Chica.Checked = true;
            this.Chica.Location = new System.Drawing.Point(28, 30);
            this.Chica.Name = "Chica";
            this.Chica.Size = new System.Drawing.Size(52, 17);
            this.Chica.TabIndex = 2;
            this.Chica.TabStop = true;
            this.Chica.Text = "Chica";
            this.Chica.UseVisualStyleBackColor = true;
            // 
            // Mediana
            // 
            this.Mediana.AutoSize = true;
            this.Mediana.Location = new System.Drawing.Point(125, 30);
            this.Mediana.Name = "Mediana";
            this.Mediana.Size = new System.Drawing.Size(66, 17);
            this.Mediana.TabIndex = 3;
            this.Mediana.Text = "Mediana";
            this.Mediana.UseVisualStyleBackColor = true;
            // 
            // groupNumero
            // 
            this.groupNumero.Controls.Add(this.cuatro);
            this.groupNumero.Controls.Add(this.uno);
            this.groupNumero.Controls.Add(this.tres);
            this.groupNumero.Controls.Add(this.dos);
            this.groupNumero.Location = new System.Drawing.Point(24, 114);
            this.groupNumero.Name = "groupNumero";
            this.groupNumero.Size = new System.Drawing.Size(336, 76);
            this.groupNumero.TabIndex = 1;
            this.groupNumero.TabStop = false;
            this.groupNumero.Text = "Cuantos Ingredientes ??";
            // 
            // cuatro
            // 
            this.cuatro.AutoSize = true;
            this.cuatro.Location = new System.Drawing.Point(268, 38);
            this.cuatro.Name = "cuatro";
            this.cuatro.Size = new System.Drawing.Size(31, 17);
            this.cuatro.TabIndex = 8;
            this.cuatro.Text = "4";
            this.cuatro.UseVisualStyleBackColor = true;
            this.cuatro.CheckedChanged += new System.EventHandler(this.cuatro_CheckedChanged);
            // 
            // uno
            // 
            this.uno.AutoSize = true;
            this.uno.Checked = true;
            this.uno.Location = new System.Drawing.Point(28, 38);
            this.uno.Name = "uno";
            this.uno.Size = new System.Drawing.Size(31, 17);
            this.uno.TabIndex = 7;
            this.uno.TabStop = true;
            this.uno.Text = "1";
            this.uno.UseVisualStyleBackColor = true;
            this.uno.CheckedChanged += new System.EventHandler(this.uno_CheckedChanged);
            // 
            // tres
            // 
            this.tres.AutoSize = true;
            this.tres.Location = new System.Drawing.Point(188, 38);
            this.tres.Name = "tres";
            this.tres.Size = new System.Drawing.Size(31, 17);
            this.tres.TabIndex = 5;
            this.tres.Text = "3";
            this.tres.UseVisualStyleBackColor = true;
            this.tres.CheckedChanged += new System.EventHandler(this.tres_CheckedChanged);
            // 
            // dos
            // 
            this.dos.AutoSize = true;
            this.dos.Location = new System.Drawing.Point(108, 38);
            this.dos.Name = "dos";
            this.dos.Size = new System.Drawing.Size(31, 17);
            this.dos.TabIndex = 6;
            this.dos.Text = "2";
            this.dos.UseVisualStyleBackColor = true;
            this.dos.CheckedChanged += new System.EventHandler(this.dos_CheckedChanged);
            // 
            // groupIngredientes
            // 
            this.groupIngredientes.Controls.Add(this.molida);
            this.groupIngredientes.Controls.Add(this.champiñones);
            this.groupIngredientes.Controls.Add(this.piña);
            this.groupIngredientes.Controls.Add(this.extra_queso);
            this.groupIngredientes.Controls.Add(this.salami);
            this.groupIngredientes.Controls.Add(this.tocino);
            this.groupIngredientes.Controls.Add(this.jamon);
            this.groupIngredientes.Controls.Add(this.peperoni);
            this.groupIngredientes.Location = new System.Drawing.Point(24, 214);
            this.groupIngredientes.Name = "groupIngredientes";
            this.groupIngredientes.Size = new System.Drawing.Size(336, 183);
            this.groupIngredientes.TabIndex = 1;
            this.groupIngredientes.TabStop = false;
            this.groupIngredientes.Text = "Ingredientes:";
            // 
            // molida
            // 
            this.molida.AutoSize = true;
            this.molida.Location = new System.Drawing.Point(188, 140);
            this.molida.Name = "molida";
            this.molida.Size = new System.Drawing.Size(57, 17);
            this.molida.TabIndex = 9;
            this.molida.Text = "Molida";
            this.molida.UseVisualStyleBackColor = true;
            this.molida.CheckedChanged += new System.EventHandler(this.CheckChanged);
            // 
            // champiñones
            // 
            this.champiñones.AutoSize = true;
            this.champiñones.Location = new System.Drawing.Point(188, 106);
            this.champiñones.Name = "champiñones";
            this.champiñones.Size = new System.Drawing.Size(90, 17);
            this.champiñones.TabIndex = 8;
            this.champiñones.Text = "Champiñones";
            this.champiñones.UseVisualStyleBackColor = true;
            this.champiñones.CheckedChanged += new System.EventHandler(this.CheckChanged);
            // 
            // piña
            // 
            this.piña.AutoSize = true;
            this.piña.Location = new System.Drawing.Point(188, 72);
            this.piña.Name = "piña";
            this.piña.Size = new System.Drawing.Size(47, 17);
            this.piña.TabIndex = 7;
            this.piña.Text = "Piña";
            this.piña.UseVisualStyleBackColor = true;
            this.piña.CheckedChanged += new System.EventHandler(this.CheckChanged);
            // 
            // extra_queso
            // 
            this.extra_queso.AutoSize = true;
            this.extra_queso.Location = new System.Drawing.Point(188, 38);
            this.extra_queso.Name = "extra_queso";
            this.extra_queso.Size = new System.Drawing.Size(84, 17);
            this.extra_queso.TabIndex = 6;
            this.extra_queso.Text = "Extra Queso";
            this.extra_queso.UseVisualStyleBackColor = true;
            this.extra_queso.CheckedChanged += new System.EventHandler(this.CheckChanged);
            // 
            // salami
            // 
            this.salami.AutoSize = true;
            this.salami.Location = new System.Drawing.Point(28, 143);
            this.salami.Name = "salami";
            this.salami.Size = new System.Drawing.Size(57, 17);
            this.salami.TabIndex = 5;
            this.salami.Text = "Salami";
            this.salami.UseVisualStyleBackColor = true;
            this.salami.CheckedChanged += new System.EventHandler(this.CheckChanged);
            // 
            // tocino
            // 
            this.tocino.AutoSize = true;
            this.tocino.Location = new System.Drawing.Point(28, 109);
            this.tocino.Name = "tocino";
            this.tocino.Size = new System.Drawing.Size(59, 17);
            this.tocino.TabIndex = 4;
            this.tocino.Text = "Tocino";
            this.tocino.UseVisualStyleBackColor = true;
            this.tocino.CheckedChanged += new System.EventHandler(this.CheckChanged);
            // 
            // jamon
            // 
            this.jamon.AutoSize = true;
            this.jamon.Location = new System.Drawing.Point(28, 75);
            this.jamon.Name = "jamon";
            this.jamon.Size = new System.Drawing.Size(57, 17);
            this.jamon.TabIndex = 3;
            this.jamon.Text = "Jamon";
            this.jamon.UseVisualStyleBackColor = true;
            this.jamon.CheckedChanged += new System.EventHandler(this.CheckChanged);
            // 
            // peperoni
            // 
            this.peperoni.AutoSize = true;
            this.peperoni.Location = new System.Drawing.Point(28, 41);
            this.peperoni.Name = "peperoni";
            this.peperoni.Size = new System.Drawing.Size(68, 17);
            this.peperoni.TabIndex = 2;
            this.peperoni.Text = "Peperoni";
            this.peperoni.UseVisualStyleBackColor = true;
            this.peperoni.CheckedChanged += new System.EventHandler(this.CheckChanged);
            // 
            // Calcular
            // 
            this.Calcular.BackColor = System.Drawing.SystemColors.WindowFrame;
            this.Calcular.Location = new System.Drawing.Point(212, 413);
            this.Calcular.Name = "Calcular";
            this.Calcular.Size = new System.Drawing.Size(129, 38);
            this.Calcular.TabIndex = 2;
            this.Calcular.Text = "Calcular";
            this.Calcular.UseVisualStyleBackColor = false;
            this.Calcular.Click += new System.EventHandler(this.Button_Click);
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.SystemColors.ActiveCaption;
            this.ClientSize = new System.Drawing.Size(384, 474);
            this.Controls.Add(this.Calcular);
            this.Controls.Add(this.groupIngredientes);
            this.Controls.Add(this.groupNumero);
            this.Controls.Add(this.groupTamaño);
            this.Icon = ((System.Drawing.Icon)(resources.GetObject("$this.Icon")));
            this.Name = "Form1";
            this.Text = "Pizza Place";
            this.groupTamaño.ResumeLayout(false);
            this.groupTamaño.PerformLayout();
            this.groupNumero.ResumeLayout(false);
            this.groupNumero.PerformLayout();
            this.groupIngredientes.ResumeLayout(false);
            this.groupIngredientes.PerformLayout();
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.GroupBox groupTamaño;
        private System.Windows.Forms.RadioButton Grande;
        private System.Windows.Forms.RadioButton Chica;
        private System.Windows.Forms.RadioButton Mediana;
        private System.Windows.Forms.GroupBox groupNumero;
        private System.Windows.Forms.RadioButton cuatro;
        private System.Windows.Forms.RadioButton uno;
        private System.Windows.Forms.RadioButton tres;
        private System.Windows.Forms.RadioButton dos;
        private System.Windows.Forms.GroupBox groupIngredientes;
        private System.Windows.Forms.CheckBox molida;
        private System.Windows.Forms.CheckBox champiñones;
        private System.Windows.Forms.CheckBox piña;
        private System.Windows.Forms.CheckBox extra_queso;
        private System.Windows.Forms.CheckBox salami;
        private System.Windows.Forms.CheckBox tocino;
        private System.Windows.Forms.CheckBox jamon;
        private System.Windows.Forms.CheckBox peperoni;
        private System.Windows.Forms.Button Calcular;
    }
}

