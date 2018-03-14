using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Data.SqlClient;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace WindowsFormsApp1
{
    public partial class MyForm : Form
    {
        public MyForm()
        {
            InitializeComponent();
        }

        private void conexion_Click(object sender, EventArgs e)
        {
            string connetionString = null;

            SqlConnection cnn;

            connetionString = "Server=localhost\\SQLEXPRESS;Database=master;Trusted_Connection=True;";

            cnn = new SqlConnection(connetionString);

            try
            {
                cnn.Open();

                MessageBox.Show("Successful Connection", "Connection Open ! ", MessageBoxButtons.OK, MessageBoxIcon.Information);

                cnn.Close();
            }
            catch (Exception ex)
            {
                MessageBox.Show(ex.ToString(), "Can not open connection ! ", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }
    }
}
