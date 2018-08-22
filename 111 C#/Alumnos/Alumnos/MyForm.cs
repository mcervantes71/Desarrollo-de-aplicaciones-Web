using System;
using System.Windows.Forms;

namespace Alumnos
{
    public partial class MyForm : Form
    {
        DataBase db;
        string estado;

        public MyForm()
        {
            InitializeComponent();

            estado = "0";
        }


        public void MyForm_Load(object sender, EventArgs e)
        {
            db = new DataBase();

            Load_DataGrid();
            showCurrentRow();
        }

        public void Load_DataGrid()
        {
            dataGrid.DataSource = db.LoadDataGrid();
        }
                
        public void showCurrentRow()
        {
            textBox1.Text = dataGrid.CurrentRow.Cells[0].Value.ToString();
            txt_no_control.Text = dataGrid.CurrentRow.Cells[0].Value.ToString();
            txt_nombre.Text = dataGrid.CurrentRow.Cells[1].Value.ToString();
            txt_aPaterno.Text = dataGrid.CurrentRow.Cells[2].Value.ToString();
            txt_aMaterno.Text = dataGrid.CurrentRow.Cells[3].Value.ToString();
        }

        private void dataGrid_Click(object sender, EventArgs e)
        {
            showCurrentRow();
        }

        public void CleanTextBox()
        {
            txt_no_control.Text = "";
            txt_nombre.Text = "";
            txt_aPaterno.Text = "";
            txt_aMaterno.Text = "";
        }

        public void EnableTextBox()
        {
            txt_no_control.Enabled = true;
            txt_nombre.Enabled = true;
            txt_aPaterno.Enabled = true;
            txt_aMaterno.Enabled = true;
        }

        public void DisableTextBox()
        {
            txt_no_control.Enabled = false;
            txt_nombre.Enabled = false;
            txt_aPaterno.Enabled = false;
            txt_aMaterno.Enabled = false;
        }

        private void insert_Click(object sender, EventArgs e)
        {
            if (estado == "0")
            {
                CleanTextBox();

                pictureBox1.Image = global::Alumnos.Properties.Resources.save;
                pictureBox2.Image = global::Alumnos.Properties.Resources.cancel;
                pictureBox3.Visible = false;
                pictureBox4.Visible = false;
                pictureBox5.Visible = false;
                pictureBox6.Visible = false;
                dataGrid.Enabled = false;

                toolTip.SetToolTip(pictureBox1, "Guardar");
                toolTip.SetToolTip(pictureBox2, "Cancelar");

                EnableTextBox();

                dataGrid.DataSource = "";
                estado = "1";

                txt_no_control.Focus();
            }
            else if (estado == "1")
            {
                db.Insert(txt_no_control.Text, txt_nombre.Text, txt_aPaterno.Text, txt_aMaterno.Text);

                pictureBox1.Image = global::Alumnos.Properties.Resources.insert;
                pictureBox2.Image = global::Alumnos.Properties.Resources.delete;
                pictureBox3.Visible = true;
                pictureBox4.Visible = true;
                pictureBox5.Visible = true;
                pictureBox6.Visible = true;
                dataGrid.Enabled = true;

                toolTip.SetToolTip(pictureBox1, "Nuevo Registro");
                toolTip.SetToolTip(pictureBox2, "Borrar Registro");

                DisableTextBox();

                Load_DataGrid();

                estado = "0";
            }
        }

        private void delete_Click(object sender, EventArgs e)
        {
            if (estado == "0")
            {
                DialogResult response = MessageBox.Show("¿Está Seguro Que Quiere Borrar Este Registro?", "Borrar Registro", MessageBoxButtons.YesNo, MessageBoxIcon.Question);

                if (response == DialogResult.Yes)
                {
                    db.Delete(txt_no_control.Text);

                    Load_DataGrid();
                }
            }
            else if (estado == "1")
            {
                pictureBox1.Image = global::Alumnos.Properties.Resources.insert;
                pictureBox2.Image = global::Alumnos.Properties.Resources.delete;
                pictureBox3.Visible = true;
                pictureBox4.Visible = true;
                pictureBox5.Visible = true;
                pictureBox6.Visible = true;
                dataGrid.Enabled = true;

                toolTip.SetToolTip(pictureBox1, "Nuevo Registro");
                toolTip.SetToolTip(pictureBox2, "Borrar Registro");

                DisableTextBox();

                Load_DataGrid();
                showCurrentRow();

                estado = "0";
            }
        }

        private void update_Click(object sender, EventArgs e)
        {
            if (estado == "0")
            {
                pictureBox1.Visible = false;
                pictureBox2.Visible = false;
                pictureBox3.Image = global::Alumnos.Properties.Resources.save;
                pictureBox4.Image = global::Alumnos.Properties.Resources.cancel;
                pictureBox5.Visible = false;
                pictureBox6.Visible = false;
                dataGrid.Enabled = false;

                toolTip.SetToolTip(pictureBox3, "Guardar");
                toolTip.SetToolTip(pictureBox4, "Cancelar");

                EnableTextBox();

                dataGrid.DataSource = "";
                estado = "2";

                txt_no_control.Focus();
            }
            else if (estado == "2")
            {
                db.Update(textBox1.Text, txt_no_control.Text, txt_nombre.Text, txt_aPaterno.Text, txt_aMaterno.Text);

                pictureBox1.Visible = true;
                pictureBox2.Visible = true;
                pictureBox3.Image = global::Alumnos.Properties.Resources.update;
                pictureBox4.Image = global::Alumnos.Properties.Resources.select;
                pictureBox5.Visible = true;
                pictureBox6.Visible = true;
                dataGrid.Enabled = true;

                toolTip.SetToolTip(pictureBox3, "Editar Registro");
                toolTip.SetToolTip(pictureBox4, "Buscar Registro");

                DisableTextBox();

                Load_DataGrid();

                estado = "0";
            }
            else if(estado == "3")
            {
                pictureBox1.Visible = true;
                pictureBox2.Visible = true;
                pictureBox3.Image = global::Alumnos.Properties.Resources.update;
                pictureBox5.Visible = true;
                pictureBox6.Visible = true;
                dataGrid.Enabled = true;

                toolTip.SetToolTip(pictureBox3, "Editar Registro");

                DisableTextBox();

                Load_DataGrid();
                showCurrentRow();

                estado = "0";
            }
        }

        private void select_Click(object sender, EventArgs e)
        {
            if(estado == "0")
            {
                CleanTextBox();

                pictureBox1.Visible = false;
                pictureBox2.Visible = false;
                pictureBox3.Image = global::Alumnos.Properties.Resources.reload;
                pictureBox5.Visible = false;
                pictureBox6.Visible = false;
                dataGrid.Enabled = false;

                toolTip.SetToolTip(pictureBox3, "Regresar");

                EnableTextBox();

                dataGrid.DataSource = "";
                estado = "3";

                txt_no_control.Focus();
            }
            else if(estado == "2")
            {
                pictureBox1.Visible = true;
                pictureBox2.Visible = true;
                pictureBox3.Image = global::Alumnos.Properties.Resources.update;
                pictureBox4.Image = global::Alumnos.Properties.Resources.select;
                pictureBox5.Visible = true;
                pictureBox6.Visible = true;
                dataGrid.Enabled = true;

                toolTip.SetToolTip(pictureBox3, "Editar Registro");
                toolTip.SetToolTip(pictureBox4, "Buscar Registro");

                DisableTextBox();

                Load_DataGrid();
                showCurrentRow();

                estado = "0";
            }
        }

        private void next_Click(object sender, EventArgs e)
        {
            
        }

        private void back_Click(object sender, EventArgs e)
        {

        }
    }
}
